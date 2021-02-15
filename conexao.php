<?php

	//local no qual o banco de dados esta instalado
	$local = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "jurassic_park_ajax";
	
	$conexao = mysqli_connect($local,$usuario,$senha,$bd) or die ("ERRO");
	
?>