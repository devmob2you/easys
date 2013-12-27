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
    public function cadastrar_clientes_bd(){
        $this->load->model('cliente_model');
        
        $dados['nome_razao'] = $this->input->post('nome_razao');
        $dados['cpf_cnpj'] = $this->input->post('cpf_cnpj');
        $dados['rg_ie'] = $this->input->post('rg_ie');
        $dados['telefone'] = $this->input->post('telefone');
        $dados['celular'] = $this->input->post('celular');
        $dados['cep'] = $this->input->post('cep');
        $dados['endereco'] = $this->input->post('endereco');
        $dados['bairro'] = $this->input->post('bairro');
        $dados['cidade'] = $this->input->post('cidade');
        $dados['uf'] = $this->input->post('uf');
        $dados['numero'] = $this->input->post('numero');
        $dados['email'] = $this->input->post('email');
        $dados['aniversario'] = $this->input->post('aniversario');
        $dados['observacoes'] = $this->input->post('observacoes');

        $exec = $this->cliente_model->cadastrar_cliente($dados);
        if($exec){
        redirect(base_url().'home','refresh');
        }
        else{
            echo '<pre>';
            print_r($exec);
            echo '</pre>';
        }
        
    }
    
}