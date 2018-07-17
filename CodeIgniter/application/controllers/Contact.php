<?php

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->page->setTitle('Contact');
        $this->page->setLoadJs('assets/js/peminjam');
    }

    public function index()
    {
        $this->load->view('user/Contact');
    }
}

?>
