<?php $this->load->view('head');?>
<div class="container">
<table id="example1" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Penumpang</th>
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
         if($bus) {
		foreach($bus as $u){ 
	?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama_penumpang ?></td>
            <td><?php echo $u->tanggal ?></td>
            <td><?php echo $u->jam ?></td>
            <td><?php echo $u->harga ?></td>
            <td><?php echo $u->kota_berangkat ?></td>
            <td><?php echo $u->kota_tujuan ?></td>
            <td><?php echo $u->tempat ?></td>
            <td>
                <?php
            switch ($u->status) {
                case 0:
                    echo anchor('pesan/bayar/' . $u->id_order, 'Bayar/Tunggu');
                    break;
                
                case 1:
                    echo anchor('pesan/order', 'Lunas');
                    echo " | ";
                    echo anchor('pesan/print/'.$u->id_order, ' Print');
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

