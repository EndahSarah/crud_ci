<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br>
<h1>List Film</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>

            <th scope="col">Film</th>
            <th scope="col">Read More</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($berita as $k) : ?>
            <tr>
                <td><?= $k['judul']; ?></td>
                <td><a href="/berita/<?= $k['slug']; ?>" class="btn btn-success">Read More</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>