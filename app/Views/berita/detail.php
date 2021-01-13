<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br>
<div class="container">
    <div class="row mt-2">
        <div class="col-md-6">
            <a href="/berita">Kembali Ke List Berita</a>
        </div>
        <div class="col-md-6" style="text-align: right;">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <div class="card" style="height: 100%; width:100%; text-align:center;">
                <img src="/img/<?= $berita['cover']; ?>" class="card-img-top" alt="Card image cap" style="height: 400px;">
                <p class="card-text">Penulis: <?= $berita['penulis']; ?></p>
                <div class="card-body">
                    <h1 class="card-text"><?= $berita['judul']; ?></h1>
                    <p class="card-text"><?= $berita['caption']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>