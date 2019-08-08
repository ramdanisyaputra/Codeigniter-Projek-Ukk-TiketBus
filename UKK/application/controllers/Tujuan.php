<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('tujuan_model');
    $this->load->helper('url');
    }
    
	public function index()
	{
		$data['tujuan'] = $this->tujuan_model->ambil();
		$this->load->view('tujuan/view', $data);
    }

    function tambah_aksi(){

		$data = array(
			'kota_tujuan' => $this->input->post('1'),
			);
		$this->tujuan_model->input_data($data,'tb_tujuan');
		redirect('tujuan/index');
    }
    
    function hapus($id){
		$where = array('id_tujuan' => $id);
		$this->tujuan_model->hapus_data($where,'tb_tujuan');
		redirect('tujuan/index');
    }
    
    

function edit($id){
	$where = array('id_tujuan' => $id);
	$data['tujuan'] = $this->tujuan_model->edit_data($where,'tb_tujuan')->result();
	$this->load->view('tujuan/update',$data);
}

function update(){

    $data = array(
        'kota_tujuan' => $this->input->post('1'),
        );
        $id=$this->input->post('id');

        $where = array(
            'id_tujuan' => $id
        );
     
        $this->tujuan_model->update_data($where,$data,'tb_tujuan');
        redirect('tujuan');
}

}
