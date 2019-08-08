<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berangkat extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('ber');
        $this->load->helper('url');
    }
    
	public function index()
	{
		$data['ber'] = $this->ber->ambil();
		$this->load->view('ber/view', $data);
    }

    function tambah_aksi(){

		$data = array(
			'kota_berangkat' => $this->input->post('1'),
			);
		$this->ber->input_data($data,'tb_berangkat');
		redirect('berangkat/index');
    }
    
    function hapus($id){
		$where = array('id_kberangkat' => $id);
		$this->ber->hapus_data($where,'tb_berangkat');
		redirect('berangkat/index');
    }
    
    

function edit($id){
	$where = array('id_kberangkat' => $id);
	$data['ber'] = $this->ber->edit_data($where,'tb_berangkat')->result();
	$this->load->view('ber/update',$data);
}

function update(){

    $data = array(
        'kota_berangkat' => $this->input->post('1'),
        );
        $id=$this->input->post('id');

        $where = array(
            'id_kberangkat' => $id
        );
     
        $this->ber->update_data($where,$data,'tb_berangkat');
        redirect('berangkat');
}

}
