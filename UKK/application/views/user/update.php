<?php $this->load->view('head')?>
<div class="container">
    <h1 align="center">Edit Account</h1>
    <?php foreach($user as $u){?>
    <form action="<?php echo base_url() . 'index.php/login/update'?>" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="hidden" name="id" value="<?php echo $u->user_id ?> ">
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="<?php echo $u->user_name ?>" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $u->user_email ?>" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">User Level</label>
        <input type="text" name="level" class="form-control" id="exampleInputEmail1" value="<?php echo $u->user_level ?>" placeholder="User Level">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
    <?php } ?>
<?php $this->load->view('footer')?>

