      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Clientes</h1>
        </div>
        
        <div class="row">
            
            <div id="listaClientes" class="span12">
                <table class="table table-bordered table-condensed table-striped">
                    <caption><strong>Lista de Clientes</strong></caption>
                    <thead>
                        <th>CÓDIGO</th>
                        <th>NOME DO CLIENTE</th>
                        <th>TELEFONE</th>
                        <th>E-MAIL</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Icaro William</td>
                            <td>16 3441-7255</td>
                            <td>dev@mob2you.com.br</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Icaro William</td>
                            <td>16 3441-7255</td>
                            <td>dev@mob2you.com.br</td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>Icaro William</td>
                            <td>16 3441-7255</td>
                            <td>dev@mob2you.com.br</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div> <!-- END: #listaClientes -->
            
            <div id="novoCliente" class="span12">
            <form role="form">
            <fieldset>
                <legend>Cadastro de Clientes</legend>
            
            <div class="span4">
                <div class="form-group">
                    <input type="text" class="form-control" id="nome_razao" placeholder="Nome ou Razão Social" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="cpf_cnpj" placeholder="CPF ou CNPJ" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="rg_ie" placeholder="RG ou I.E" />
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" id="telefone" placeholder="Telefone Fixo" />
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" id="celular" placeholder="Telefone Móvel" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="cep" placeholder="CEP (apenas números)" />
                  </div>
            </div>
            
            <div class="span4">
                <div class="form-group">
                    <input type="text" class="form-control" id="endereco" placeholder="Endereço" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="bairro" placeholder="Bairro" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="cidade" placeholder="Cidade" />
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" id="numero" placeholder="Número" />
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="@ E-mail" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="aniversario" placeholder="Aniversário" />
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="aniversario" placeholder="Observações Gerais"></textarea>
                  </div>
            </div>
            </fieldset>      
                </form>
            </div> <!-- END: #novoCliente -->
            
            <div class="span7" style="background-color: #ccc;padding: 25px;">
                
                <div class="input-append" style="margin-left: 20px;">
                  <input class="span6" id="appendedInputButton" type="text" placeholder="Pesquisa cadastro já existente por [Nome]" />
                  <button id="btnSrc" type="submit" class="btn">
                      <i class="icon-search"></i>
                    </button>
                </div>
                
                <div class="span8">
                    <div class="btn-group">
                        <button id="btnNovo" class="btn btn-primary">Novo</button>
                        <button id="btnGravar" class="btn btn-success">Gravar</button> <!-- Grava e Lista -->
                        <button id="btnApagar" class="btn btn-danger">Apagar</button>
                        <button id="btnAlterar" class="btn btn-warning">Alterar</button>
                        <button id="btnFechar" class="btn btn-info">Fechar</button>
                    </div>
                </div>
                
            </div>
            
            <div class="span4 pull-right">
                <fieldset>
                    <legend>Modos de pesquisa:</legend>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optSrc" id="optSrc1" value="nome" checked />
                        Nome
                      </label>
                    </div>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="optSrc" id="optSrc2" value="cpf_cnpj" />
                        CPF/CNPJ
                      </label>
                    </div>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="optSrc" id="optSrc3" value="codigo" />
                        Código
                      </label>
                    </div>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="optSrc" id="optSrc4" value="telefone" />
                        Telefone
                      </label>
                    </div>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="optSrc" id="optSrc5" value="email" />
                        E-mail
                      </label>
                    </div>
                </fieldset>
            </div> <!-- END: Mobos de pesquisa -->
                
            </div>
            
            <!--<div class="alert alert-success">
              Dados inseridos com sucesso!
            </div> --> <!-- IMPLEMENTAR MENSAGENS -->
            
        </div>
        
        <p class="lead success">Estatísticas:</p>
        <ul>
            <li class="text-success">Pagamentos: Em dia</li>
            <li class="text-info">Próximo vencimento: xx/xx/xxxx</li>
            <li class="text-info">Você possúi [x] notificações.</li>
        </ul>
        <p>Ir para <a href="http://mob2you.com.br">Mob2You</a></p>
      </div>

      <div id="push"></div>
    </div> <!-- END: #wap -->
