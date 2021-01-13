<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h1 class="mt-2">List Film</h1>
<a href="/film/create" class="btn btn-primary mb-2 mt-2">Tambah List Film</a>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<table class="table table-striped table-dark">
    <thead>
        <tr>

            <th scope="col">Film</th>
            <th scope="col">Read More</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($film as $k) : ?>
            <tr>
                <td><?= $k['judul']; ?></td>
                <td><a href="/film/<?= $k['slug']; ?>" class="btn btn-success">Read More</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>