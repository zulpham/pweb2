<?= $this->extend('layout/template'); ?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-3">Form Ubah Data Buku</h1>
            <form action="/books/update/<?= $buku['id'];?>" method="post">
                <?= csrf_field();?>
                <input type="hidden" name="slug" value="<?= $buku['slug'];?>">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation ->hasError('judul'))? 'is-invalid' :'';?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $buku['judul'];?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul');?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis'))? old('penulis') : $buku['penulis'];?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit'))? old('penerbit') : $buku['penerbit'];?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul" value="<?= (old('sampul'))? old('sampul') : $buku['sampul'];?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>