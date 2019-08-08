<?php $this->load->view('head')?>
<div class="container">
    <?php foreach($pesan as $u){?>
    <form action="<?php echo base_url() . 'index.php/pesan/tambah_aksi2'?>" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Penumpang</label>
        <input type="hidden" name="id" value="<?php echo $u->id_bus ?> ">
        <input type="text" name="2" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">No Hp</label>
        <input type="text" name="3" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Keberangkatan</label>
        <input type="date" name="4" class="form-control" id="exampleInputEmail1" value="<?php echo $u->tanggal ?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jam Keberangkatan</label>
        <input type="time" name="5" class="form-control" id="exampleInputEmail1" value="<?php echo $u->jam ?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Harga</label>
        <input type="text" name="6" class="form-control" id="exampleInputEmail1" value="<?php echo $u->harga ?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Kota Keberangkat</label>
        <input type="text" name="7" class="form-control" id="exampleInputEmail1" value="<?php echo $u->kota_berangkat ?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Kota Tujuan</label>
        <input type="text" name="8" class="form-control" id="exampleInputEmail1" value="<?php echo $u->kota_tujuan ?>" readonly="readonly">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tempat Keberangkatan</label>
        <input type="text" name="9" class="form-control" id="exampleInputEmail1" value="<?php echo $u->tempat ?>" readonly="readonly">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
    <?php } ?>
<?php $this->load->view('footer')?>

