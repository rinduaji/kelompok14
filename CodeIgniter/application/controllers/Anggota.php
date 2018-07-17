<?php

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->page->setTitle('Anggota');
        $this->load->model('Anggota_Model');
        $this->page->setLoadJs('assets/js/peminjam');
    }

    public function index()
    {
        $data["Anggota_List"]=$this->Anggota_Model->getAll();
        $this->load->view('admin/admin',$data);
    }  

    public function anggota_add()
        {
             /*$data = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'noTelp' => $this->input->post('noTelp'),
                    'kodePos' => $this->input->post('kodePos'),
                    'provinsi' => $this->input->post('provinsi'),
                    'kota' => $this->input->post('kota'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'level' => $this->input->post('level')
            );*/
            $data = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'noTelp' => $this->input->post('noTelp'),
                    'kodePos' => $this->input->post('kodePos'),
                    'provinsi' => $this->input->post('provinsi'),
                    'kota' => $this->input->post('kota'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'level' => $this->input->post('level')
            );
            $insert = $this->Anggota_Model->anggota_add($data);
            echo json_encode(array("status" => TRUE));
        }

    public function ajax_edit($id)
    {
        $data = $this->Anggota_Model->get_anggota_by_id($id);
        echo json_encode($data);
    }

    public function anggota_update()
    {
        $data = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'noTelp' => $this->input->post('noTelp'),
                    'kodePos' => $this->input->post('kodePos'),
                    'provinsi' => $this->input->post('provinsi'),
                    'kota' => $this->input->post('kota'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'level' => $this->input->post('level')
            );
        $this->Anggota_Model->anggota_update(array('idLogin' => $this->input->post('idLogin')),$data);
        echo json_encode(array("status" => TRUE));
    }

    public function anggota_delete($id)
    {
        $this->Anggota_Model->delete_anggota_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}
?>
