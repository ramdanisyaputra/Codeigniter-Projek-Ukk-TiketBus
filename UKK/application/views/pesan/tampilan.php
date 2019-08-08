<?php $this->load->view('head');?>
<div class="container">
<?php foreach ($pesan as $u){?>
<table class="table table-bordered" style="width:50%;" align="center">
  <thead>
      <tr>
          <th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pesan Tiket</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col">Nama Travel</th>
      <td scope="col"><?php echo $u->nama ?></th>
    </tr>
    <tr>
      <td scope="row">Tanggal Keberangkatan</th>
      <td scope="row"><?php echo $u->tanggal?></td>
    </tr>
    <tr>
      <td scope="row">Jam Berangkat</th>
      <td scope="row"><?php echo $u->jam?></td>
    </tr>
    <tr>
      <td scope="row">Harga</th>
      <td scope="row"><?php echo $u->harga?></td>
    </tr>
    <tr>
      <td scope="row">Kota Berangkat</th>
      <td scope="row"><?php echo $u->kota_berangkat?></td>
    </tr>
    <tr>
      <td scope="row">Kota Tujuan</th>
      <td scope="row"><?php echo $u->kota_tujuan?></td>
    </tr>
    <tr>
      <td scope="row">Tempat Berangkat</th>
      <td scope="row"><?php echo $u->jam?></td>
    </tr>
    <tr>
      <td scope="row" colspan="2" style="padding-left:230px"><a href="<?php echo site_url('pesan/form/'.$u->id_bus)?>" class="btn btn-warning">Pesan Sekarang</a></th>
    </tr>
  </tbody>
</table>
<?php } ?>
</div>
<?php $this->load->view('footer');?>