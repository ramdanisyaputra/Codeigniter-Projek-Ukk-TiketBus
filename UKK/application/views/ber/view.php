<?php $this->load->view('head');?>
<div class="container">
<h1 align="center">Kota Keberangkatan</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
Tambah Data
</button>
<br>
<br>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?php echo base_url() . 'index.php/berangkat/tambah_aksi'?>" method="post">
      <div class="form-group">
            <label for="exampleInputEmail1">Kota Keberangkatan</label>
            <input type="text" name="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
              <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>
<table id="example1" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kota Tujuan</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($ber as $u){ 
	?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->kota_berangkat ?></td>
            <td>
                <?php echo anchor('berangkat/edit/' . $u->id_kberangkat, 'Edit'); ?> |
                <?php echo anchor('berangkat/hapus/' . $u->id_kberangkat, 'Hapus'); ?>
            </td>
        </tr>
        <?php }?>
    </tbody>
    <tbody>
    </tbody>
</table>
<?php $this->load->view('footer');?>
