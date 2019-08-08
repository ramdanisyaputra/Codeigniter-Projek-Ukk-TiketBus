<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('order_model');
        $this->load->helper('url');
    }
    
	public function index()
	{
		$data['pesan'] = $this->order_model->tampil_data();
		$this->load->view('pesan/pesan', $data);
	}
	
	public function tampilan($id){
		$aktif = array('id_bus'=>$id);
		$data['pesan'] = $this->order_model->join($aktif);
		  $this->load->view('pesan/tampilan',$data);    
	}

	public function form($id){
		$aktif = array('id_bus'=>$id);
		$data['pesan'] = $this->order_model->join($aktif);
		  $this->load->view('pesan/form',$data);    
	}

    function tambah(){
		$this->load->view('bus/create');
	}
    
    function tambah_aksi(){
		
 
		$data = array(
			'nama' =>  $this->input->post('1'),
			'tanggal' =>  $this->input->post('2'),
			'jam' =>  $this->input->post('3'),
			'harga' =>  $this->input->post('4'),
			'id_kberangkat' =>  $this->input->post('5'),
			'id_tujuan' => $this->input->post('6'),
			'tempat' =>  $this->input->post('7'),
			
			);
		$this->order_model->input_data($data,'tb_order');
		redirect('pesan/index');
    }
    
    function hapus($id){
		$where = array('id_bus' => $id);
		$this->order_model->hapus_data($where,'tb_bus');
		redirect('bus/index');
    }
    
    

function edit($id){
    $aktif = array('id_bus'=>$id);
	$data['bus'] = $this->order_model->join($aktif);
	$data['awe'] = $this->order_model->ambil();
	$data['awe2'] = $this->order_model->ambil2();
  	$this->load->view('bus/update',$data);    
}

function update()
{
	$id=$this->input->post('id');
	$data = array(
		'nama' =>  $this->input->post('1'),
		'tanggal' =>  $this->input->post('2'),
		'jam' =>  $this->input->post('3'),
		'harga' =>  $this->input->post('4'),
		'id_kberangkat' =>  $this->input->post('5'),
		'id_tujuan' => $this->input->post('6'),
		'tempat' =>  $this->input->post('7'),
		
	);	

	$where = array(
		'id_bus' => $id
	);
 
	$this->order_model->update_data($where,$data,'tb_bus');
	redirect('bus/index');
}

}
