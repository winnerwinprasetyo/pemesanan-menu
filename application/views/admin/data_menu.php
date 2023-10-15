<div class="container-fluid">
  <?php if( $this->session->flashdata('flash') ) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data menu<strong> berhasil </strong> <?php echo $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    </div>
  </div>
<?php endif; ?>

  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_menu"><i class="fa-solid fa-plus fa-sm"></i> Tambah Menu</button>


    <table class="table table-border">
        <tr align="center">
            <th>No</th>
            <th>Nama Menu</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php 
        $no=1;
        foreach ($menu as $mnu) : ?>
        
            <tr align="center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $mnu->nama_menu ?></td>
                <td><?php echo $mnu->keterangan ?></td>
                <td><?php echo $mnu->kategori ?></td>
                <td><?php echo $mnu->harga?></td>
                <td><?php echo $mnu->stok ?></td>
                <!-- <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td> -->
                <td><?php echo anchor('admin/data_menu/edit/' .$mnu->id_menu, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_menu/hapus/' .$mnu->id_menu, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

            </tr>
        
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url().'admin/data_menu/tambah_aksi'?>" method="post" enctype="multipart/form-data">
           
            <div class="form-group">
                <label>Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option>Makanan</option>
                  <option>Minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div class="form-group">
                <label>Gambar Menu</label><br>
                <input type="file" name="gambar" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>