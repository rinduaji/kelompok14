<?php

class Login extends CI_Controller
{
    /**
     * summary
     */
    public function index() {

    }

    public function cekLogin()
    {
    	$this->form_validation->set_rules('Email','Email','trim|required');
    	$this->form_validation->set_rules('Password','Password','trim|required|callback_cekDb');
    	
    	if ($this->form_validation->run() == FALSE ){
    		$this->load->view('shop/index');
    	}else{
    		redirect('anggota','refresh');
    	}
    }
    public function cekDb($password)
    {
    	$this->load->model('user');
    	$username = $this->input->post('Email');
    	$result = $this->user->Login($username,$password);
    	if ($result) {
    		$sess_array = array();
    		foreach ($result as $row) {
    			$sess_array = array(
    				'idLogin'=>$row->idLogin,
					'email'=>$row->email,
					'level'=>$row->level
    				);
    			$this->session->set_userdata('logged_in',$sess_array);
    		}
    		return true;
    	}else{
    		$this->form_validation->set_message('cekDb',"login gagal username dan password tidak valid");
    		return false;
    	}

    }
    public function logout()
    {
    	$this->session->unset_userdata('logged_in');
    	$this->session->sess_destroy();
    	redirect('shop','refresh');
    }

     public function create() {
    	$this->load->model('user');
    

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('shop/index');
        }else{
                $this ->user ->insert();
                $this ->load->view('index');
        }
    }

    public function cekPw($konfirmasi_password) {
            $password = $this->input->post('password');
            $Kpassword = $this->input->post('ConfirmPassword');
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
            $this->form_validation->set_rules('nama','Nama','trim|required');
            $this->form_validation->set_rules('alamat','Alamat','trim|required');
            $this->form_validation->set_rules('noTelepon','No Telepon','trim|required');
            $this->form_validation->set_rules('kodePos','Kode Pos','trim|required');
            $this->form_validation->set_rules('provinsi','Provinsi','trim|required');
            $this->form_validation->set_rules('kota','Kota','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            $this->form_validation->set_rules('ConfirmPassword','Confirm Password','trim|required|callback_cekPw');
            $this->form_validation->set_rules('level','Level','trim|required');
            if($this->form_validation->run() == false){
                $this->load->view('shop/index',$data);
            } else {
                $this->User->insert();
                redirect('index','refresh');
            }
        }
}
?>
