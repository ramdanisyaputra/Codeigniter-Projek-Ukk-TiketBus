<?php
class Pesan_model extends CI_Model{
    function tampil_data(){
      $this->db->select('*');
      $this->db->from('tb_bus');
      $this->db->join('tb_berangkat', 'tb_berangkat.id_kberangkat = tb_bus.id_kberangkat');
      $this->db->join('tb_tujuan', 'tb_tujuan.id_tujuan= tb_bus.id_tujuan');
      $query = $this->db->get();
      return $query->result();
    }

    function cari($keyword){
      $this->db->select('*');
      $this->db->from('tb_bus');
      $this->db->join('tb_berangkat', 'tb_berangkat.id_kberangkat = tb_bus.id_kberangkat');
      $this->db->join('tb_tujuan', 'tb_tujuan.id_tujuan= tb_bus.id_tujuan');
      $this->db->where('kota_tujuan',$keyword);
      $query = $this->db->get();
      return $query->result();
    }

    function join($aktif){
      $this->db->select('*');
      $this->db->from('tb_bus');
      $this->db->join('tb_berangkat','tb_berangkat.id_kberangkat=tb_bus.id_kberangkat');
      $this->db->join('tb_tujuan','tb_tujuan.id_tujuan=tb_bus.id_tujuan');
      $this->db->where($aktif);
      $query = $this->db->get();
      return $query->result();
    }

    function print($aktif){
      $this->db->select('*');
      $this->db->from('tb_order');
      $this->db->join('tb_bus','tb_bus.id_bus=tb_order.id_bus');
      $this->db->where($aktif);
      $query = $this->db->get();
      return $query->result();
    }
    

    function ambil(){
      $query = $this->db->query('SELECT * FROM tb_berangkat');
      return $query->result();
    }

    function order(){
      $query = $this->db->query('SELECT * FROM tb_order');
      return $query->result();
    }

    function ambil_order(){
      $query = $this->db->query("SELECT * FROM tb_order where user_id='".$this->session->userdata('user_id')."'");
      return $query->result();
    }

    function konfirmasi(){
      $this->db->select('*');
      $this->db->from('tb_pembayaran');
      $this->db->join('tb_order', 'tb_order.id_order = tb_pembayaran.id_order');
      $this->db->join('tbl_users', 'tbl_users.user_id = tb_order.user_id');
      $query = $this->db->get();
      return $query->result();
    }

    function ambil2(){
      $query = $this->db->query('SELECT * FROM tb_tujuan');
      return $query->result();
    }
    
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
    }
    

function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}
function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
}	

}