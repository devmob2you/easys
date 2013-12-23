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
	<br>
	BOTÕES BOOTSTRAP:<br>
	<a href="#" class="btn">btn</a>
	<a href="#" class="btn btn-primary">btn btn-primary</a>
	<a href="#" class="btn btn-large">btn btn-large</a>
	<a href="#" class="btn btn-primary btn-large">btn btn-primary btn-large</a>