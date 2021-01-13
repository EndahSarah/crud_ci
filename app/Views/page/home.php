<!-- Menghubungkan file home ke template (dari folder layout nama file template) -->
<?= $this->extend('layout/template'); ?>
<!-- Menghubungkan konten dengan template di layout  -->
<?= $this->section('content'); ?>
<br>
<div class="jumbotron">
    <h1 class="display-4">Hello, Friends!</h1>
    <p class="lead">Welcome to My Website</p>
    <hr class="my-4">
    <p><b>Website ini dibuat dengan HTML, CSS, PHP, dan CodeIgniter 4</b></p>
    <p><b> ini menampilkan halaman home, about, skill dan list film</b></p>
    <p><b>Halaman List Film menerapkan CRUD</b></p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
<!-- mengakhiri section -->
<?= $this->Endsection(); ?>