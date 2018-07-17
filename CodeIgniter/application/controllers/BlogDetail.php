<?php

class BlogDetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->page->setTitle('Blog Detail');
        $this->load->model('Barang_Model');
        $this->page->setLoadJs('assets/js/peminjam');
    }

    public function index($id)
    {
        $data['blog_detail_barang']=$this->Barang_Model->get_by_id($id);
        $this->load->view('user/blog-detail',$data);
    }
}

?>
