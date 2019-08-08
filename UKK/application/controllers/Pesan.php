<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('pesan_model');
        $this->load->helper('url');
    }
	
	public function search(){
		$keyword = $this->input->post('search');
		$data['pesan']=$this->pesan_model->cari($keyword);
		$this->load->view('pesan/pesan',$data);
	}

	public function status(){
		$data['history_order'] = $this->status_m->get_status();
		$this->load->view('status',$data);
	}

	public function index()
	{
		$data['pesan'] = $this->pesan_model->tampil_data();
		$this->load->view('pesan/pesan', $data);
	}

	public function konfirmasi()
	{
		$data['pesan'] = $this->pesan_model->konfirmasi();
		$this->load->view('pesan/konfirmasi', $data);
	}

	public function konfirmasi2($id){
		
		$data = array(
			'status' =>  1,
			);

		$where = array(
		'id_order' => $id
	);
 
	$this->pesan_model->update_data($where,$data,'tb_order');

	redirect('pesan/konfirmasi');
	}
	
	public function tampilan($id){
		$aktif = array('id_bus'=>$id);
		$data['pesan'] = $this->pesan_model->join($aktif);
		  $this->load->view('pesan/tampilan',$data);    
	}

	public function print($id){
		$aktif = array('id_order'=>$id);
		$data['print'] = $this->pesan_model->print($aktif);
		$this->load->view('pesan/print',$data);    
	}


	public function form($id){
		$aktif = array('id_bus' => $id );
		$data['pesan'] = $this->pesan_model->join($aktif);
		  $this->load->view('pesan/form',$data);    
	}


	function bayar($id){
		$where = array('id_order' => $id);
		$data['pesan'] = $this->pesan_model->edit_data($where,'tb_order')->result();
		$this->load->view('pesan/bayar',$data);
	}

	public function order()
	{
		
		$data['bus'] = $this->pesan_model->ambil_order();
		$this->load->view('pesan/order', $data);
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
		$this->pesan_model->input_data($data,'tb_bus');
		redirect('bus/index');
    }
	
	function tambah_aksi2(){
		
 
		$data = array(
			'id_bus' =>  $this->input->post('id'),
			'user_id' =>  $this->session->userdata('user_id'),
			'nama_penumpang' =>  $this->input->post('2'),
			'hp' =>  $this->input->post('3'),
			'tanggal' =>  $this->input->post('4'),
			'jam' => $this->input->post('5'),
			'harga' =>  $this->input->post('6'),
			'kota_berangkat' =>  $this->input->post('7'),
			'kota_tujuan' =>  $this->input->post('8'),
			'tempat' =>  $this->input->post('9'),
			
			);
		$this->pesan_model->input_data($data,'tb_order');
		redirect('pesan');
	}
	
	public function tambah_aksi3()
    {
		$config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('4')) {

        } else {
            $jenis = $this->input->post('id');
            $tanggal = $this->input->post('1');
            $keterangan = $this->input->post('2');
            $_data = array('upload_data' => $this->upload->data());
            $data = array(
                'id_order' => $jenis,
                'norek' => $tanggal,
                'nama_bank' => $keterangan,
                'bukti_pembayaran' => $_data['upload_data']['file_name']
			);
			$query = $this->db->insert('tb_pembayaran', $data);
            if ($query) {
                echo 'berhasil di upload';
                redirect('pesan');
            } else {
                echo 'gagal upload';
			}
        }
	}

    function hapus($id){
		$where = array('id_bus' => $id);
		$this->pesan_model->hapus_data($where,'tb_bus');
		redirect('bus/index');
    }
    
    

function edit($id){
    $aktif = array('id_bus'=>$id);
	$data['bus'] = $this->pesan_model->join($aktif);
	$data['awe'] = $this->pesan_model->ambil();
	$data['awe2'] = $this->pesan_model->ambil2();
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
 
	$this->pesan_model->update_data($where,$data,'tb_bus');
	redirect('bus/index');
}

}
