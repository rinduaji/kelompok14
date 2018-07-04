<?php

	class Anggota extends CI_Controller {

		public function index(){
			$data['title']="anggota";
			$this->load->library('form_validation');
			$this->load->view('admin',$data);
		}
	}
?>
