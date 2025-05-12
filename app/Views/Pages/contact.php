<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
        <?php foreach($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <p><?= $a['alamat']; ?>
                </ul>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>