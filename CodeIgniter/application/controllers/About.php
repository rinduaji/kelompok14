<?php

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->page->setTitle('About');
        $this->page->setLoadJs('assets/js/peminjam');
    }

    public function index()
    {
        $this->load->view('user/About');
    }
}

?>
