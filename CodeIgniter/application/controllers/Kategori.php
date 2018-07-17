<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('Kategori_Model');
	 	}


	public function index()
	{

		$data['list_kategori']=$this->Kategori_Model->get_all_books();
		$this->load->view('admin/kategori_view',$data);
	}
	public function kategori_add()
		{
			$data = array(
					'namaKategori' => $this->input->post('namaKategori')
				);
			$insert = $this->Kategori_Model->kategori_add($data);
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit($id)
		{
			$data = $this->Kategori_Model->get_by_id($id);
			echo json_encode($data);
		}

		public function kategori_update()
		{
			$data = array(
					'namaKategori' => $this->input->post('namaKategori')
				);
			$this->Kategori_Model->kategori_update(array('idKategori' => $this->input->post('idKategori')), $data);
			echo json_encode(array("status" => TRUE));
		}

	public function kategori_delete($id)
	{
		$this->Kategori_Model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
}
