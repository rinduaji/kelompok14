<?php

	class Admin extends CI_Controller {

		public function index(){
			$data['title']="admin";
			$this->load->library('form_validation');
			$this->load->view('admin',$data);
		}
	}
?>
