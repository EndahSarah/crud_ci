<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br>
<div class="container">
    <div class="row mt-2">
        <div class="col-md-6">
            <a href="/film">Kembali Ke List Film</a>
        </div>
        <div class="col-md-6" style="text-align: right;">
            <a href="/film/edit/<?= $film['slug']; ?>" class="btn btn-warning">Edit</a>
            <form action="/film/delete/<?= $film['id'] ?>" method="POST" class="d-inline">
                <?php csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <div class="card" style="height: 100%; width:100%; text-align:center;">
                <img src="/img/<?= $film['cover']; ?>" class="card-img-top" alt="Card image cap" style="height: 450px; width:300px; margin-left: auto; margin-right: auto;">
                <p class="card-text">Sutradara: <?= $film['sutradara']; ?></p>
                <div class="card-body">
                    <h1 class="card-text"><?= $film['judul']; ?></h1>
                    <p class="card-text"><?= $film['Synopsis']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>