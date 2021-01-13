<!-- Menghubungkan file home ke template (dari folder layout nama file template) -->
<?= $this->extend('layout/template'); ?>
<!-- Menghubungkan konten dengan template di layout  -->
<?= $this->section('content'); ?>
<br>
<h1 style="text-align: center; color:blue;">Hello, This is About ME</h1>
<br>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="/img/me.jpg" class="card-img" alt="ini saya">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Endah Sarah Wanty</h5>
                <p class="card-text">Junior Programmer IAIN Purwokerto</p>
                <p class="card-text">13 Agustus 1994</p>
                <p class="card-text">Purwokerto, Jawa Tengah</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
<!-- mengakhiri section -->
<?= $this->Endsection(); ?>