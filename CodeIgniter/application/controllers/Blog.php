<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->page->setTitle('Blog');
        $this->load->model('Barang_Model');
        $this->page->setLoadJs('assets/js/peminjam');
    }

    public function index()
    {
        $data['blog_barang']=$this->Barang_Model->select_shop_list();
        $this->load->view('user/Blog',$data);
    }
}

?>
