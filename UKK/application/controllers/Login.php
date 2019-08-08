<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
    $this->load->helper('url');
    
  }
 
  function index(){
    $this->load->view('login_view');
  }
 
  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $id=$data['user_id'];
        $name  = $data['user_name'];
        $email = $data['user_email'];
        $level = $data['user_level'];
        $sesdata = array(
            'user_id'=>$id,
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('page');
 
        // access login for staff
        }elseif($level === '2'){
            redirect('page/staff');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

  public function lihat()
  {
    $data['user'] = $this->login_model->tampil_data()->result();
    $this->load->view('user/view',$data);
  }

  public function insert()
  {
    $this->load->view('user/create');
  }

  public function create()
  {
    $id=$this->input->post('id');
    $username = $this->input->post('username');
		$email = $this->input->post('email');
 
		$data = array(
      'user_id'=>$id,
			'user_name' => $username,
			'user_email' => $email,
      'user_password' => md5($this->input->post('password')),
      'user_level'=> 1
			);
    $this->login_model->input_data($data,'tbl_users');  
    echo "<script type='text/javascript'> alert('Sukses'); </script>";
    redirect('login/index');
  }

  function hapus($id){
		$where = array('user_id' => $id);
		$this->login_model->hapus_data($where,'tbl_users');
		redirect('login/lihat');
  }
  
  

function edit($id){
	$where = array('user_id' => $id);
	$data['user'] = $this->login_model->edit_data($where,'tbl_users')->result();
	$this->load->view('user/update',$data);
}

function update()
{
  $username = $this->input->post('username');
  $email = $this->input->post('email');
  $id = $this->input->post('id');
  $level=$this->input->post('level');

  $data = array(
    'user_name' => $username,
    'user_email' => $email,
    'user_password' => md5($this->input->post('password')),
    'user_level'=> $level
    );

    $where=array('user_id'=>$id);
    $this->login_model->update_data($where,$data,'tbl_users');
    redirect('login/lihat');
}
 
}