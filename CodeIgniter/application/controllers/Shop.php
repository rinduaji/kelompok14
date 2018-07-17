<?php

class Shop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->page->setTitle('Shop');
        $this->load->model('Barang_Model');
        $this->page->setLoadJs('assets/js/peminjam');
    }

    public function index()
    {
        $data['list_pilihan_barang']=$this->Barang_Model->select_shop_list();
        $data['list_kategori']=$this->Barang_Model->get_nama_kategori();
        $this->load->view('user/index',$data);
    }
}
?>
