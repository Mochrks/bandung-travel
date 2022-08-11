<?php
class Landing extends CI_Controller
{
    public function index()
    {
        $this->load->helper("url");
        $this->load->view("landing");
    }
}
