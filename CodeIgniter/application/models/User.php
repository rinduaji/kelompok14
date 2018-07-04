<?php
	class User extends CI_Model {

		public function Login($username,$password){
			$this->db->select('id,username,password');
			$this->db->from('login');
			$this->db->where('username', $username);
			$this->db->where('password', MD5($password));
			$query = $this->db->get();

			if($query->num_rows() == 1){
				return $query->result();
			}else{
				return false;
			}
		}

		public function insert(){
			$data = array(
				'username'=>$this->input->post('username'),
				'password'=>MD5($this->input->post('password'))
					);
			$this->db->insert('login', $data);
		}
	}
?>
