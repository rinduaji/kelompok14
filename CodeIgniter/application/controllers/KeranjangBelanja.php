<?php

class KeranjangBelanja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->page->setTitle('keranjangbelanja');
        $this->load->model('KeranjangBelanja_Model');
        $this->page->setLoadJs('assets/js/peminjam');
    }

    public function index()
    {
        $data["KeranjangBelanja_List"]=$this->KeranjangBelanja_Model->getAll();
        $data['nama_barang']=$this->KeranjangBelanja_Model->get_nama_barang();
        $data['nama_kategori']=$this->KeranjangBelanja_Model->get_nama_kategori();
        $this->load->view('admin/keranjangbelanja_view',$data);
    }  

    public function keranjangbelanja_add()
    {
            
            $barang=$this->KeranjangBelanja_Model->get_nama_barang_by_id($this->input->post('idBarang'));
                foreach ($barang as $b ) {
                    $barang=$b;
            }
            $kategori=$this->KeranjangBelanja_Model->get_nama_kategori_by_id($this->input->post('idKategori'));
                foreach ($kategori as $k ) {
                    $kategori=$k;
            }
            $data = array(
                    'idKeranjangBelanja' => $this->input->post('idKeranjangBelanja'),
                    'idBarang' => $barang,
                    'idKategori' => $kategori,
                    'totalHarga' => $this->input->post('totalHarga')
            );
            $insert = $this->KeranjangBelanja_Model->keranjangbelanja_add($data);
            echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->KeranjangBelanja_Model->get_keranjangbelanja_by_id($id);
        echo json_encode($data);
    }

    public function keranjangbelanja_update()
    {
            $barang=$this->KeranjangBelanja_Model->get_nama_barang_by_id($this->input->post('idBarang'));
                foreach ($barang as $b ) {
                    $barang=$b;
            }
            $kategori=$this->KeranjangBelanja_Model->get_nama_kategori_by_id($this->input->post('idKategori'));
                foreach ($kategori as $k ) {
                    $kategori=$k;
            }
            $data = array(
                    'idBarang' => $barang,
                    'idKategori' => $kategori,
                    'totalHarga' => $this->input->post('totalHarga')
            );
        $this->KeranjangBelanja_Model->keranjangbelanja_update(array('idKeranjangBelanja' => $this->input->post('idKeranjangBelanja')),$data);
        echo json_encode(array("status" => TRUE));
    }

    public function keranjangbelanja_delete($id)
    {
        $this->KeranjangBelanja_Model->delete_keranjangbelanja_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}
?>
