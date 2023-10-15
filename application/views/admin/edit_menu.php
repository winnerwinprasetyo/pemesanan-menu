
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit Data Menu</h3>

    <?php foreach($menu as $mnu) : ?>

        <form method="post" action="<?php echo base_url().'admin/data_menu/update'?>">
        
        <div class="for-group">
            <label>Nama Menu</label>
            <input type="text" name="nama_menu" class="form-control" 
            value="<?php echo $mnu->nama_menu?>">
        </div>

        <div class="for-group">
            <label>Keterangan</label>
            <input type="hidden" name="id_menu" class="form-control" 
            value="<?php echo $mnu->id_menu?>">
            <input type="text" name="keterangan" class="form-control" 
            value="<?php echo $mnu->keterangan?>">
        </div>

        <div class="for-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" 
            value="<?php echo $mnu->kategori?>">
        </div>

        <div class="for-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" 
            value="<?php echo $mnu->harga?>">
        </div>
    
        <div class="for-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control" 
            value="<?php echo $mnu->stok?>">
        </div>

        <div class="form-group">
                <label>Gambar Menu</label><br>
                <input type="file" name="gambar" class="form-control"
                value="<?php echo $mnu->gambar?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-2">Simpan</button>


    </form>

        <?php endforeach; ?>
</div>