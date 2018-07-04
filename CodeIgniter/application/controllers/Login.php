<?php

	class Login extends CI_Controller {

		public function index(){
			$data['title']="Login";
			$this->load->library('form_validation');
			$this->load->view('login_view',$data);
		}

		public function cekDb($password) {
			$this->load->model('User');
			$username = $this->input->post('username');
			$result = $this->User->login($username,$password);
			if($result){
				$sess_array = array();
				foreach ($result as $row) {
					$sess_array = array('id'=>$row->id,'username'=>$row->username);
					$this->session->set_userdata('logged_in',$sess_array);
				}
				return true;
			} else {
				$this->form_validation->set_message('cekDb','Login Gagal Username dan Password Tidak Valid');
				return false;
			}
		}

		public function cekLogin(){
			$data['title']="Login";
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required|callback_cekDb');
			if($this->form_validation->run() == false){
				$this->load->view('login_view',$data);
			} else {
				redirect('anggota','refresh');
			}
		}


		public function logout(){
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			redirect('login','refresh');
		}


		public function cekPw($konfirmasi_password) {
			$password = $this->input->post('password');
			$Kpassword = $this->input->post('Konfirmasi_password');
			if($konfirmasi_password!=$password) {
				$this->form_validation->set_message('cekPw','Password tidak sama');
				return false;
			} else {
				return true;
			}
		}

		public function signUp(){
			$data['title']="Register";
			$this->load->model('User');
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password','trim|required|callback_cekPw');
			if($this->form_validation->run() == false){
				$this->load->view('Register',$data);
			} else {
				$this->User->insert();
				redirect('login','refresh');
			}
		}
	}
?>
