
<?= $this->extend('layout/template'); ?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-4 mb-4">Daftar Buku</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; foreach ($buku as $b) : ?>
                    <tr>
                        <th scope="row"><?=$i++?></th>
                        <td><img src="/images/<?=$b['sampul']?>" alt="" class="sampul img-thumbnail" style="max-width: 100px;"></td>
                        <td><?= $b['judul'];?></td>
                        <td><a href="/books/<?= $b['slug']; ?>" class="btn btn-success">Detail</a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection();?>