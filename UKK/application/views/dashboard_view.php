<?php $this->load->view('head');?>
<div class="container">
        <div class="jumbotron">
            <h1>Welcome Back <?php echo $this->session->userdata('username');?></h1>
        </div>
</div>
<?php $this->load->view('footer');?>
   