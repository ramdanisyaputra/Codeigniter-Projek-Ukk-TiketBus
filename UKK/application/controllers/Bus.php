<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('bus_model');
        $this->load->helper('url');
    }
    
	public function index()
	{
		$data['bus'] = $this->bus_model->tampil_data();
		$data['awe'] = $this->bus_model->ambil();
		$data['awe2'] = $this->bus_model->ambil2();
		$this->load->view('bus/view', $data);
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
		$this->bus_model->input_data($data,'tb_bus');
		redirect('bus/index');
    }
    
    function hapus($id){
		$where = array('id_bus' => $id);
		$this->bus_model->hapus_data($where,'tb_bus');
		redirect('bus/index');
    }
    
    

function edit($id){
    $aktif = array('id_bus'=>$id);
	$data['bus'] = $this->bus_model->join($aktif);
	$data['awe'] = $this->bus_model->ambil();
	$data['awe2'] = $this->bus_model->ambil2();
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
 
	$this->bus_model->update_data($where,$data,'tb_bus');
	redirect('bus/index');
}

}
