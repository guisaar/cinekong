<?php
session_start();
include('verifica_login.php');
?>
<html lang="pt-br" >
		<head>
		
		
		<meta charset="UTF-8"/>
		<meta name="descrição" content="Ecobike">
			<meta name="palavrasChaves" content=" ">
		<title> CineKong </title> 
		
		<link rel="stylesheet" type="text/css" href="formatacaoHome.css"/>
	
		
		
		
		</head>
		
	<body> 
	<div id="Gza">
<!-- Colocar uma cor de hover em a: AZUL com as letras em Prateado... -->
		<header id="topo">
      <div id="teste"><figure>  <img src="Cinekong1.png"  ></figure></div>


	
	
	
<div id="qza"><img src="CineKong.png" width="100%"></div>
		<div class="menu">
		<ul>

  
  <li><a href="">Home</a></li>
   <li><a class="active" href="">Filmes</a></li>
   <li><a class="active" href="">Sessões</a></li>
 <li><a href="">Conta</a></li>
  <li><a class="active2" href="">Lanches</a></li>
</ul>

	   </div> </header>	
	   <div id="meio">
	   <div id="meio3"></div>
	   <div id="Titulo"><h1 class="T1">Até a proximaaaa</h1><br></div>
	   <div id="meio31"></div><div id="Gzaa">
	   <div id="meio4">
	   <article id="conteudo">
	  <aside id="lateral">

	</aside>
<aside id="lateral">
	
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
	</aside>
	 <aside id="lateral">

	</aside>
	<aside id="lateral">

<h2><a href="logout.php">Sair</a></h2>
	</aside>
	   </article>
	
	    </div> 
	</div>
	
	 <div id="meio31"></div>
	
	<footer id="rodape">
<div style="">
<h1>Sobre o Grupo</h1><br>

 Desenvolvido por:Guilherme Saar - Gustavo Botelho  - Gustavo Guile - Harrison Silva Rocha - Igor Almeida <br><br>
 Proibido a distribuição ou reprodução do produto sem autorização
</div>
	
<div style="">	
<h1 class="Texto" >Atendimento ao Cliente</h1><br>
<p><strong style="color:rgb(104, 190, 232)">E-Mail</strong>:CineKong@gmail.com</p>
<p><strong style="color:rgb(104, 190, 232)">Telefone/WhatsApp:</strong>+55 (11) 94002-8922</p>
<p>Atendimento de Segunda a Sexta</p>
<a href="Formularios.html" class="Texto">Entre em contato.</a></div>

	</footer>
	</div></div>
	
	</body>

