<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->view('layout');
        $this->load->view('inc/top');
        $this->load->view('inc/body');
        $this->load->view('inc/footer');
    }
    
    public function cadastrarClientes(){
        $this->load->view('layout');
        $this->load->view('inc/top');
        $this->load->view('cadastro/clientes');
        $this->load->view('inc/footer');
    }
}