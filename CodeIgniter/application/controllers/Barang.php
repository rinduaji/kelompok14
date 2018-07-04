<?php

	class Barang extends CI_Controller {

		public function index(){
			$data['title']="barang";
			$this->load->library('form_validation');
			$this->load->view('adminBarang',$data);
		}
	}
?>
