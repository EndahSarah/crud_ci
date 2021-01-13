<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/film/save" method="POST">
                <?php csrf_field(); ?>
                <h1 class="mt-2 mb-2">Tabel Tambah List Film</h1>

                <div class="form-group">
                    <label for="inputfilm">Judul Film</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="inputfilm" placeholder="Tuliskan Judul Berita" name="judul">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputsutradara">Sutradara Film</label>
                    <input type="text" class="form-control <?= ($validation->hasError('sutradara')) ? 'is-invalid' : '' ?>" id="inputsutradara" placeholder="Tuliskan Nama Sutradara Film" name="sutradara">
                    <div class="invalid-feedback">
                        <?= $validation->getError('sutradara'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputsynopsis">Synopsis Film</label>
                    <input type="text" class="form-control <?= ($validation->hasError('Synopsis')) ? 'is-invalid' : '' ?>" id="inputsynopsis" placeholder="Tuliskan Synopsis Film" name="Synopsis">
                    <div class="invalid-feedback">
                        <?= $validation->getError('Synopsis'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputcover">Cover Film</label>
                    <input type="text" class="form-control <?= ($validation->hasError('cover')) ? 'is-invalid' : '' ?>" id="inputcover" placeholder="Upload Cover Film" name="cover">
                    <div class="invalid-feedback">
                        <?= $validation->getError('cover'); ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>