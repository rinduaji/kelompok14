<?php

class ProductDetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->page->setTitle('Product Detail');
        $this->load->model('Barang_Model');
        $this->load->model('KeranjangBelanja_Model');
        $this->page->setLoadJs('assets/js/peminjam');
    }

    public function index($id)
    {
        $data['detail_barang']=$this->Barang_Model->get_by_id($id);
        $this->load->view('user/product-detail',$data);
    }

     public function beli($id){
            $data_beli=$this->Barang_Model->get_by_id($id);
            $data = array(
                    'idBarang' => $data_beli->idBarang,
                    'idKategori' => $data_beli->idKategori,
                    'totalHarga' => $data_beli->harga
            );
            $insert = $this->KeranjangBelanja_Model->keranjangbelanja_add($data);
            //echo json_encode(array("status" => TRUE));
            redirect('user');
     }
}

?>
