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
                    <li><a href="#">Comiss�es</a></li>
                    <!--Comiss�es
                    Cadastro de vendedores e
                    regras de comissionamento,
                    gerenciamento de comiss�es,
                    coloca��o de pedidos pelo
                    vendedor externo. -->   
                    <li class="divider"></li>
                    <li><a href="#">Adicionar ao estoque</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">DADOS GERAIS</li>
                    <li><a href="#">Usu�rios do sistema</a></li>
                    <li><a href="#">Informa��es da empresa</a></li>
                    <li><a href="#">Configura��es</a></li> <!-- conta pagseguro, editar carta de cobran�a, face,etc -->
                  </ul>
                </li>  
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendas <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Efetuar vendas | Or�amentos</a></li>
                    <li><a href="#">Lan�amentos diversos</a></li>
                    <li><a href="#">Fechamento de vendas</a></li>
                    <li class="divider"></li>
                    <li><a href="#">2� via recibo de venda</a></li>
                    <li><a href="#">Estornar venda</a></li>
                  </ul>
                </li> 
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Financeiro <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Consultar pagamentos</a></li>
                    <li><a href="#">Emitir 2� via de pagamentos</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Lan�amentos (entrada/sa�da)</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Cobran�as</a></li>
                    <!--Cobran�as
                        M�dulo de envio de cobran�as para devedores
                     -->
                    <li class="divider"></li>
                    <li><a href="#">Movimenta��es confirmadas no turno</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Plano de contas</a></li>
                  </ul>
                </li> 
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Utilit�rios <b class="caret"></b></a>
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
                    com possibilidade de envi�-las
                    por e-mail. -->
                    <li class="divider"></li>                    
                    <li><a href="#">Alertas do sistema</a></li> <!-- baixo estoque/anivers�rios -->
                    <li><a href="#">Backup do sistema</a></li>
                  </ul>
                </li> 
                
                <li><a href="#">Relat�rios</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ajuda <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Sobre o EaSyS ERP</a></li>
                    <li><a href="#">Manual do Sistema</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Adicionar M�dulos</a></li>
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
        
