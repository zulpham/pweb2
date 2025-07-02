<?php
namespace App\Controllers;
use App\Models\PenulisModel;
use CodeIgniter\Controller;
use PSpell\Config;

class Penulis extends BaseController
{
    protected $penulisModel;
    public function __construct()
    {
        $this->penulisModel = new PenulisModel();
    }
    public function index()
    {
        $pageSekarang = $this->request->getVar('page_penulis') ? $this->request->getVar('page_penulis') : 1;
        $kataKunci = $this->request->getVar('keyword');
        if($kataKunci){
            $penulis = $this->penulisModel->search($kataKunci);
        }
        else{
            $penulis = $this->penulisModel;
        }
        
        $data = [
            'title' => 'Daftar Penulis',
            'penulis' => $penulis->paginate(10, 'penulis'),
            'pager' => $this->penulisModel->pager,
            'pageSekarang' => $pageSekarang
        ];
        return view('penulis/index', $data);
    }
    public function search($kataKunci){
        return $this->penulisModel->table('penulis')->like('name', $kataKunci)->orLike('address', $kataKunci);
    }
}