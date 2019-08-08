<?php $this->load->view('head');?>
<div class="container">
<h1 align="center">Data Konfirmasi</h1>
<table id="example1" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Nama Penumpang</th>
            <th>Nomor Rekening</th>
            <th>Nama Bank</th>
            <th>Bukti Pembayaran</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $no = 1;
        if($pesan) {
		foreach($pesan as $u){ 
	?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->user_name?></td>
            <td><?php echo $u->nama_penumpang?></td>
            <td><?php echo $u->norek ?></td>
            <td><?php echo $u->nama_bank?></td>
            <td><img src="<?php echo base_url() . 'gambar/'.$u->bukti_pembayaran  ?>" style="width:50px;height:50px"></td>
            <td>
            <?php
                switch ($u->status) {
                case 0:
                    echo anchor('pesan/konfirmasi2/' . $u->id_order, 'Konfirmasi');
                    break;
                
                case 1:
                    echo anchor('pesan/konfirmasi', 'Sudah Di Konfirmasi');
                    break;
            }
                ?>
            </td>
        </tr>
        <?php }}?>
    </tbody>
    <tbody>
    </tbody>
</table>
</div>
<?php $this->load->view('footer');?>

