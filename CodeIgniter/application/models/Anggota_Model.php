<?php
	class Anggota_Model extends CI_Model
	{

		var $table = 'login';

		public function __construct()
		{
			parent::__construct();
		}

		private function getTable(){
			return 'login';
		}

		public function getAll(){
			$query = $this->db->get($this->getTable());
			if($query->num_rows() > 0 ) {
				foreach ($query->result() as $row) {
					$Anggota[] = $row;
				}
				return $Anggota;
			}
		}

		public function get_anggota_by_id($id)
		{
			$this->db->from($this->getTable());
			$this->db->where('idLogin',$id);
			$query = $this->db->get();

			return $query->row();
		}

		public function anggota_add($data)
		{
			$this->db->insert($this->table, $data);
			return $this->db->insert_id();
		}

		public function anggota_update($where,$data)
		{
			
			$this->db->update($this->getTable(), $data, $where);
			return $this->db->affected_rows();
		}

		public function delete_anggota_by_id($id)
		{
			$this->db->where('idLogin', $id);
			$this->db->delete($this->getTable());
		}

	}

?>
