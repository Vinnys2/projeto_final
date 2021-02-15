<?php
	header("Content-Type: Application/json");
	
	include('conexao.php');
	
	$p = $_POST["pg"];
	
	$sql= "SELECT id_relacao, setor.descricao as setor, filial.nome as filial FROM relacao INNER JOIN setor ON cod_setor=id_setor
	INNER JOIN filial ON cod_filial=id_filial";
	
	if(isset($_POST["nome_filtro"])){
		$nome = $_POST["nome_filtro"];
		$sql .= " WHERE filial.nome LIKE '%$nome%'";
	}
	
	$sql .= " LIMIT $p,5";
	
	$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
				
	while($linha = mysqli_fetch_assoc($resultado)){
		$matriz[] = $linha;
	}
	
	echo json_encode($matriz);
?>