<!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?php echo base_url();?>">EaSyS ERP v1.0</a>
            <div class="nav-collapse collapse">
              
              <ul class="nav">  
              
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url().'home/cadastrarClientes';?>">Clientes</a></li>
                    <li><a href="#">Fornecedores</a></li>
                    <li><a href="#">Tipo ou categoria</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Comissões</a></li>
                    <!--Comissões
                    Cadastro de vendedores e
                    regras de comissionamento,
                    gerenciamento de comissões,
                    colocação de pedidos pelo
                    vendedor externo. -->   
                    <li class="divider"></li>
                    <li><a href="#">Adicionar ao estoque</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">DADOS GERAIS</li>
                    <li><a href="#">Usuários do sistema</a></li>
                    <li><a href="#">Informações da empresa</a></li>
                    <li><a href="#">Configurações</a></li> <!-- conta pagseguro, editar carta de cobrança, face,etc -->
                  </ul>
                </li>  
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendas <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Efetuar vendas | Orçamentos</a></li>
                    <li><a href="#">Lançamentos diversos</a></li>
                    <li><a href="#">Fechamento de vendas</a></li>
                    <li class="divider"></li>
                    <li><a href="#">2ª via recibo de venda</a></li>
                    <li><a href="#">Estornar venda</a></li>
                  </ul>
                </li> 
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Financeiro <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Consultar pagamentos</a></li>
                    <li><a href="#">Emitir 2ª via de pagamentos</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Lançamentos (entrada/saída)</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Cobranças</a></li>
                    <!--Cobranças
                        Módulo de envio de cobranças para devedores
                     -->
                    <li class="divider"></li>
                    <li><a href="#">Movimentações confirmadas no turno</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Plano de contas</a></li>
                  </ul>
                </li> 
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utilitários <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url().'calc';?>">Calculadora</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Buscar clientes</a></li>
                    <li><a href="#">Buscar produtos</a></li>
                    <li><a href="#">Buscar fornecedores</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Propostas comerciais</a></li>
                    <!--Propostas Comerciais
                    Gerenciamento de propostas
                    com possibilidade de enviá-las
                    por e-mail. -->
                    <li class="divider"></li>                    
                    <li><a href="#">Alertas do sistema</a></li> <!-- baixo estoque/aniversários -->
                    <li><a href="#">Backup do sistema</a></li>
                  </ul>
                </li> 
                
                <li><a href="#">Relatórios</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ajuda <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Sobre o EaSyS ERP</a></li>
                    <li><a href="#">Manual do Sistema</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Adicionar Módulos</a></li>
                    <li><a href="#">Suporte</a></li>
                  </ul>
                </li> 
                
               <!-- <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                -->
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sair <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://www.mob2you.com.br">Fechar o EaSyS ERP</a></li>
                    <li><a href="#">Curtir</a></li>
                  </ul>
                </li>
                
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
        
