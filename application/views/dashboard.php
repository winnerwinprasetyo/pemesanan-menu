<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
    </div>

    <div class="container mt-3 text-white bg-primary">
        <div class="row text-center">
            <div class="col">
                <h2>Menu Kami</h2>
            </div>
        </div>
    </div>

    <div class="row text-center mt-3">
        <?php foreach ($menu as $mnu) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$mnu->gambar ?>" class="card-img-top" style="border-radius: 50% width: 80%;" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $mnu->nama_menu ?></h5>
                <small><?php echo $mnu->keterangan ?></small><br>
                <span class="badge badge-pill badge-success mb-3">Rp.
                <?php echo number_format($mnu->harga, 0,',','.') ?></span>
                <span class="badge badge-pill badge-success mb-3">Tersedia</span>
               <?php echo anchor('dashboard/tambah_ke_keranjang/'.$mnu
                    ->id_menu,'<div class="btn btn-sm 
                    btn-primary">Tambah Ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/'.$mnu
                    ->id_menu,'<div class="btn btn-sm 
                    btn-info mt-2">Detail</div>') ?>  
            </div>
            </div>
            <?php endforeach; ?>
    </div>
</div>