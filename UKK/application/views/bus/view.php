<?php $this->load->view('head');?>
<div class="container">
<h1 align="center">Data Bus</h1>
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
      <form action="<?php echo base_url() . 'index.php/bus/tambah_aksi'?>" method="post">
      <div class="form-group">
            <label for="exampleInputEmail1">Nama Travel</label>
            <input type="text" name="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Berangkat</label>
            <input type="date" name="2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jam Berangkat</label>
            <input type="time" name="3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Harga</label>
            <input type="text" name="4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kota Keberangkatan</label>
            <select name="5" id="" class="form-control">
            <?php
              foreach($awe as $row)
              {
              echo '<option value="'.$row->id_kberangkat.'">'.$row->kota_berangkat.'</option>';
              }
              ?>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kota Tujuan</label>
            <select name="6" id="" class="form-control">
            <?php
              foreach($awe2 as $row)
              {
              echo '<option value="'.$row->id_tujuan.'">'.$row->kota_tujuan.'</option>';
              }
              ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tempat Keberangkatan</label>
            <input type="text" name="7" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
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


<table id="example1" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Travel</th>
            <th>Tanggal Berangkat</th>
            <th>Jam Berangkat</th>
            <th>Harga</th>
            <th>Kota Berangkat</th>
            <th>Kota Tujuan</th>
            <th>Tempat Berangkat</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($bus as $u){ 
	?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->tanggal ?></td>
            <td><?php echo $u->jam ?></td>
            <td><?php echo $u->harga ?></td>
            <td><?php echo $u->kota_berangkat ?></td>
            <td><?php echo $u->kota_tujuan ?></td>
            <td><?php echo $u->tempat ?></td>
            <td>
                <?php echo anchor('bus/edit/' . $u->id_bus, 'Edit'); ?> |
                <?php echo anchor('bus/hapus/' . $u->id_bus, 'Hapus'); ?>
            </td>
        </tr>
        <?php }?>
    </tbody>
    <tbody>
    </tbody>
</table>
</div>
<?php $this->load->view('footer');?>
