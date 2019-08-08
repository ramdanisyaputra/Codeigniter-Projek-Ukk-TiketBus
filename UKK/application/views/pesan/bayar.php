<?php $this->load->view('head')?>
<div class="container">
    <?php foreach($pesan as $u){?>
    <form action="<?php echo base_url() . 'index.php/pesan/tambah_aksi3'?>" method="post" enctype="multipart/form-data">
    <p>Note: Kirim Ke Rekening Ini : 	2700-000.003 </p>
    <div class="form-group">
        <label for="exampleInputEmail1">No Rekening</label>
        <input type="hidden" name="id" value="<?php echo $u->id_order ?>">
        <input type="text" name="1" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Bank</label>
        <input type="text" name="2" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Harga</label>
        <input type="text" name="3" class="form-control" id="exampleInputEmail1" value="<?php echo $u->harga?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Bukti Transaksi</label>
        <input type="file" name="4" class="form-control" id="exampleInputEmail1" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
    <?php } ?>
<?php $this->load->view('footer')?>

