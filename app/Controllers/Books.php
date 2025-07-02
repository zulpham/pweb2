<?php
namespace App\Controllers;

use App\Models\BooksModel;

class Books extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new BooksModel();
    }
    public function index()
    {
        $buku = $this->bukuModel->findAll();
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $buku
        ];
        return view('books/index', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        return view('books/detail', $data);
    }
    public function create(){
        $data = [
            'title' => 'Detail Buku',
            'validation' => \Config\Services::validation()
        ];
        return view('books/create', $data);
    }
    public function save(){
        if(!$this->validate([


            'judul' => [
                'rules' => 'required|is_unique[books.judul]',
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} buku sudah terdaftar.'
                ]
                ],
                'sampul' => [
                    'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        //'uploaded' => 'Pilihlah gambar yang sesuai.',
                        'max_size' => 'Ukuran gambar terlalu besar.',
                        'is_image' => 'File anda pilih bukan gambar.',
                        'mime_in' => 'File anda  bukan gambar'
                        ]
                ]
        ])){
            log_message('debug', 'Validation failed in save method.');
            $validation = $this->validator;

            return redirect()->to(base_url() . '/books/create')->withInput()->with('validation', $validation);
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $gambarSampul = $this->request->getFile('sampul');
        if($gambarSampul->getError() ==4) {
            $namaSampul = 'nocover.jpg';
        } else {
            $namaSampul = $gambarSampul->getRandomName();
            $gambarSampul->move('images', $namaSampul);
        }
        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/books');
    }
    public function delete($id){
        $buku = $this->bukuModel->find($id);
        if($buku['sampul'] != 'nocover.jpg'){
            unlink('images/'.$buku['sampul']);
        }
        $this->bukuModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/books');
    }
    public function edit($slug){
        $data = [
            'title' => 'Form Ubah Data Buku',
            'validation' => \Config\Services::validation(),
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        return view('books/edit', $data);
    }
    public function update($id){
        $bukuLama = $this->bukuModel->getBuku($this->request->getVar('slug'));
        if($bukuLama['judul'] == $this->request->getVar('judul')){
            $rule_judul = 'required';
        } else {
            $rule_judul ='required|is_unique[books.judul]';
        }
        $gambarSampul = $this->request->getFile('sampul');
        if($gambarSampul->getError() ==4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            $namaSampul = $gambarSampul->getRandomName();
            $gambarSampul->move('images', $namaSampul);
            unlink('images/'.$this->request->getVar('sampulLama'));
        }
        if(!$this->validate([


            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                   'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} buku sudah terdaftar.'
                ]
                ],
                'sampul' => [
                    'rules' =>'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        //'uploaded' => 'Pilihlah gambar yang sesuai.',
                       'max_size' => 'Ukuran gambar terlalu besar.',
                        'is_image' => 'File anda pilih bukan gambar.',
                       'mime_in' => 'File anda  bukan gambar'
                        ]
                ]
        ])){
            log_message('debug', 'Validation failed in update method.');
            $validation = $this->validator;
            return redirect()->to('/books/edit/'.$this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
           'sampul' => $namaSampul
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/books');
    }
}