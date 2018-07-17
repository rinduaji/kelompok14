<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_Model extends CI_Model
{

	var $table = 'barang';


	public function __construct()
	{
		parent::__construct();
	}


	public function get_all_barang()
	{
		$this->db->from('barang');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('idBarang',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_nama_penjual()
	{
		$this->db->select('namaPenjual');
		$this->db->from('penjual');
		$query = $this->db->get();

		return $query->result();
	}

	public function get_nama_penjual_by_id($nama)
	{
		$this->db->select('idPenjual');
		$this->db->from('penjual');
		$this->db->where('namaPenjual',$nama);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_nama_kategori()
	{
		$this->db->select('namaKategori');
		$this->db->from('kategori');
		$query = $this->db->get();

		return $query->result();
	}

	public function get_nama_kategori_by_id($nama)
	{
		$this->db->select('idKategori');
		$this->db->from('kategori');
		$this->db->where('namaKategori',$nama);
		$query = $this->db->get();

		return $query->row();
	}

	public function barang_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function barang_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('idBarang', $id);
		$this->db->delete($this->table);
	}

	public function select_shop_list(){
		$this->db->select('*');
		$this->db->from('barang');
		$query = $this->db->get();

		return $query->result();
	}
}
