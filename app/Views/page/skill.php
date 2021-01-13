<!-- Menghubungkan file home ke template (dari folder layout nama file template) -->
<?= $this->extend('layout/template'); ?>
<!-- Menghubungkan konten dengan template di layout  -->
<?= $this->section('content'); ?>
<br>
<h1 style="text-align: center; color:brown;">Hello, This is Skill Page</h1>
<br>
<div class="card-deck">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">CSS</div>
            <div class="card-body">
                <h5 class="card-title">CSS</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">CodeIgniter 4</div>
            <div class="card-body">
                <h5 class="card-title">CodeIgniter 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">HTML</div>
            <div class="card-body">
                <h5 class="card-title">HTML</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Javascript</div>
            <div class="card-body">
                <h5 class="card-title">Javascript</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Bootstrap 4</div>
            <div class="card-body">
                <h5 class="card-title">Bootstrap 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">PHP</div>
            <div class="card-body">
                <h5 class="card-title">PHP</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <!-- mengakhiri section -->
    <?= $this->Endsection(); ?>