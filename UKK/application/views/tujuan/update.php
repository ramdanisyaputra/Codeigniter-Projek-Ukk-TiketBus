<?php $this->load->view('head')?>
<div class="container">
    <h1 align="center">Edit Kota Keberangkatan</h1>
    <?php foreach($tujuan as $u){?>
    <form action="<?php echo base_url() . 'index.php/berangkat/update'?>" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="hidden" name="id" value="<?php echo $u->id_tujuan ?> ">
        <input type="text" name="1" class="form-control" id="exampleInputEmail1" value="<?php echo $u->kota_tujuan ?>" placeholder="Enter Username">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
    <?php } ?>
<?php $this->load->view('footer')?>

