<?php $this->load->view('head');?>
<div class="container">
<h1 align="center">Data User</h1>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>User Level</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($user as $u){ 
	?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->user_name ?></td>
            <td><?php echo $u->user_email ?></td>
            <td><?php echo $u->user_level ?></td>
            <td>
                <?php echo anchor('login/edit/' . $u->user_id, 'Edit'); ?> |
                <?php echo anchor('login/hapus/' . $u->user_id, 'Hapus'); ?>
            </td>
        </tr>
        <?php }?>
    </tbody>
    <tbody>

    </tbody>
</table>
</div>
<?php $this->load->view('footer');?>
