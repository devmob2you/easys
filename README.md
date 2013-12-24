Create a new repository on the command line

touch README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/devmob2you/easys.git
git push -u origin master
Push an existing repository from the command line

git remote add origin https://github.com/devmob2you/easys.git
git push -u origin master

==

Utilizado CodeIgniter 2.1.4
Bootstrap 2.3.2


<script src="<?php echo base_url('public/js/jquery.js'); ?>"></script>	
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.css'); ?>" />
<script src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>


MINHA URL BASE: <?php echo base_url('public/css/bootstrap.css'); ?>
==	
FORMS:
<form role="form">
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
                  
                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div>
                  
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
                  
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
==                
BOTÕES BOOTSTRAP:<br>
	<a href="#" class="btn">btn</a>
	<a href="#" class="btn btn-primary">btn btn-primary</a>
	<a href="#" class="btn btn-large">btn btn-large</a>
	<a href="#" class="btn btn-primary btn-large">btn btn-primary btn-large</a>
==
MÓDULOS FUTUROS:
*Etiquetador Correios: http://www.correios.com.br/enderecador/encomendas/default.cfm    