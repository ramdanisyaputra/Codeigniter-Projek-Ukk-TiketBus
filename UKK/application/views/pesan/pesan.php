<?php $this->load->view('head');?>
<div class="container">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<div class="col-md-3" style="margin-left:-15px">
<form action="<?php echo base_url() . 'index.php/pesan/search'?>" method="post">
<p>Cari Kota Tujuan</p>
<input type="text" name="search" style="margin-top:-20px">
<input type="submit" name="search_submit" value="Cari">
</form>
</div>
<br>
<br>
<br>
<br>
<br>


<?php foreach($pesan as $u){?>
    <div class="w3-card-4">

<header class="w3-container w3-light-grey">
  <h3><?php echo $u->nama ?> </h3>
</header>

<div class="w3-container">
  <p> Tanggal : <?php echo $u->tanggal ?> , Pukul : <?php echo $u->jam?></p>
  <p>Jurusan : <?php echo $u->kota_berangkat?> - <?php echo $u->kota_tujuan?></p>
  <hr>
  <p> Harga : <?php echo $u->harga ?> </p>
</div>

<a href="<?php echo site_url('pesan/tampilan/'.$u->id_bus)?>" class="w3-button w3-block w3-dark-grey">Pesan</a>

</div>
<br>
<br>
<?php } ?>
<?php $this->load->view('footer');?>