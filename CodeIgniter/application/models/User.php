<?php
 class user extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }
    public function login($username,$password)
    {
    	$this->db->select('idLogin,email,password,level');
    	$this->db->from('login');
    	$this->db->where('email',$username);
    	$this->db->where('password',md5($password));
    	$query = $this->db->get();
    	if ($query->num_rows()==1) {
    		return $query->result();
    	}else{
    		return false;
    	}

    }


    public function insert(){
            $data = array(
                'nama'=>$this->input->post('nama'),
                'alamat'=>$this->input->post('alamat'),
                'noTelp'=>$this->input->post('noTelepon'),
                'kodePos'=>$this->input->post('kodePos'),
                'provinsi'=>$this->input->post('provinsi'),
                'kota'=>$this->input->post('kota'),
                'email'=>$this->input->post('email'),
                'password'=>MD5($this->input->post('password')),
                'level' => $this->input->post('level')
                    );
            $this->db->insert('login', $data);
    }
}
?>
