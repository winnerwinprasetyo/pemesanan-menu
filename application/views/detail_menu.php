<div class="container-fluid">

    <div class="card">
    <div class="card-header">
        Detail Menu
    </div>
    <div class="card-body">

        <?php foreach($menu as $mnu) : ?>

        <div class="row">
            <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$mnu->gambar?>" class="card-img-top">

            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>    
                        <td>Nama Menu</td>
                        <td><strong><?php echo $mnu->nama_menu ?></strong></td>
                    </tr>

                    <tr>    
                        <td>keterangan</td>
                        <td><strong><?php echo $mnu->keterangan ?></strong></td>
                    </tr>

                    <tr>    
                        <td>Kategori</td>
                        <td><strong><?php echo $mnu->kategori?></strong></td>
                    </tr>

                    <tr>    
                        <td>Stok</td>
                        <td><strong><?php echo $mnu->stok ?></strong></td>
                    </tr>

                    <tr>    
                        <td>Harga</td>
                        <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($mnu->harga,0,',','.') ?></div></strong></td>
                    </tr>
                </table>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$mnu
                    ->id_menu,'<div class="btn btn-sm 
                    btn-primary">Tambah Ke Keranjang</div>') ?>

                <?php echo anchor('dashboard/index/',
                    '<div class="btn btn-sm 
                    btn-danger">Kembali</div>') ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>

</div>