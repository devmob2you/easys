<?php
class Calc extends CI_Controller{
    public function index(){
        $this->load->view('layout');
        $this->load->view('inc/top');
        $this->load->view('tools/calculator/calculator');
        $this->load->view('inc/footer');
    }
}