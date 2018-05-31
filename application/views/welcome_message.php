<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Quartetop</title>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= base_url("includes/bootstrap/css/bootstrap.min.css");?>">

<!-- Latest compiled and minified JavaScript -->

</head>
<body>

	<!-- Navigation -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	      <div class="container">
	        <a class="navbar-brand" href="#">Quartetop</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarResponsive">

	        </div>
	      </div>
	    </nav>
			<br><br>
	    <!-- Page Content -->
	    <div class="container">

	      <!-- Introduction Row -->
	      <h1 class="my-4">Bem-Vindo!
					<br>
	        <small>Equipe de programadores em Tecnologias Web</small>
	      </h1>
	      <p>Trabalho 03 da Disciplina de Tecnologias Web 2018.2 
	      O objetivo do trabalho é desenvolver um site usando os conhecimentos adquiridos até o presente momento na disciplina. O site foi desenvolvido utilizando CodeIgniter e Bootstrap.</p>
	      <br><br>
	      <h4>O que é CodeIgniter?</h4>
	      <p>O Codeigniter é um framework para desenvolvimento web baseado na arquitetura MVC. 
	      O framework apresenta uma estrutura que lhe permite de forma rápida fazer uso de bibliotecas para ganhar tempo e aproveitar a reutilização de código. Algumas vantagens do CodeIgniter são:</p>
	      <ul>
	      	<li>Boa documentação;</li>
	      	<li>Sem necessidade de instalação;</li>
	      	<li>É muito leve em relação a outros frameworks;</li>
	      	<li>Não precisa se preocupar tanto com pré-requisitos em servidores;</li>
	      </ul>

	      <h4>O que é Bootstrap?</h4>
	      <p> Bootstrap é um framework web com código-fonte aberto para desenvolvimento de componentes de interface e front-end para sites e aplicações web usando HTML, CSS e JavaScript, baseado em modelos de design para a tipografia, melhorando a experiência do usuário em um site amigável e responsivo.
	      O Bootstrap é um dos projetos mais bem avaliado no site GitHub, com mais de 111 600 estrelas e 51 500 forks.</p>

	      <!-- Team Members Row -->
	      <div class="row">
	        <div class="col-lg-12">
	          <h2 class="my-4">Nossa Equipe</h2>
	        </div>
	        <div class="col-lg-3 col-sm-6 text-center mb-4">
						<a href="<?php echo base_url();?>index.php/mateus/sobre/">
							<!-- Aqui são carregadas as imagens clicáveis. Copiem os links de acordo com as views de cada um de vocês-->
							<img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url("images/mateus.jpeg");?>" style="width: 200px; height: 200px" alt="">
						</a>
						<h3>Mateus Arruda
	            <small>Programador</small>
	          </h3>
	          <p>Programador Python e Java atualmente passando fome por conta do desemprego.</p>
	        </div>
	        <div class="col-lg-3 col-sm-6 text-center mb-4">
	          <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url("images/leiila.jpeg");?>" style="width: 200px; height: 200px" alt="">
	          <h3>Leila Rodrigues
	            <small>Graduanda em Engenharia da Computação/small>
	          </h3>
	          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
	        </div>
	        <div class="col-lg-3 col-sm-6 text-center mb-4">
	          <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url("images/paulo.jpeg");?>" style="width: 200px; height: 200px" alt="">
	          <h3>Paulo Victor
	            <small>Desempregado</small>
	          </h3>
	          <p>E só.</p>
	        </div>
	        <div class="col-lg-3 col-sm-6 text-center mb-4">
	          <img class="rounded-circle img-fluid d-block mx-auto"  src="<?= base_url("images/lucas.jpeg");?>" style="width: 200px; height: 200px" alt="">
	          <h3>Lucas Mota
	            <small>Job Title</small>
	          </h3>
	          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
	        </div>


	      </div>

	    </div>
	    <!-- /.container -->

<script src="<?=base_url("includes/bootstrap/js/jquery-3.1.1.js")?>"></script>
<script src="<?=base_url("includes/bootstrap/js/popper.js")?>"></script>
<script src="<?=base_url("includes/bootstrap/js/bootstrap.min.js")?>"></script>
</body>
</html>
