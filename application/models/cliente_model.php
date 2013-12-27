<?php

class Cliente_model extends CI_Model{
    
    function cadastrar_cliente($dados)
	{
		$sql = "insert into clientes (nome_razao,cpf_cnpj,rg_ie,tel_fixo,tel_movel,cep,endereco,bairro,cidade,uf,numero,email,aniversario,observacoes) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, array($dados['nome_razao'],$dados['cpf_cnpj'],$dados['rg_ie'],$dados['telefone'],$dados['celular'],$dados['cep'],$dados['endereco'],$dados['bairro'],$dados['cidade'],$dados['uf'],$dados['numero'],$dados['email'],$dados['aniversario'],$dados['observacoes']));
		
		return $query;
	}
}