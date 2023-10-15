<div class="container-fluid">
    <h4>Invoice Pemesanan Menu</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr align="center">
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>No_Whatsapp</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Status Pesanan</th>
           
            <th colspan="2">Aksi</th>
        </tr>

        
        <?php foreach($invoice as $inv) : ?>
        <tr align="center">
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->no_whatsapp ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><select class="form-control">
                 <option>Pending</option>
                 <option>Confirmed</option>     
            </select></td>
            
            <td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
        </tr>

        <?php endforeach; ?>

    </table>


</div>

