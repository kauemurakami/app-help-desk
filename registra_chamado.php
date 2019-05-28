<?php 

	$titulo = $_POST['titulo'];
	$categoria = $_POST['categoria'];
	$descricao = $_POST['descricao'];

	//PHP_EOL responsavel por capturar a quebra del inha do SO
	$arquivo = fopen('arquivo.k','a');
	$texto =  PHP_EOL.'Titulo: '.$titulo.PHP_EOL.'Categoria: '. $categoria .PHP_EOL.'Descrição: '. $descricao . PHP_EOL;
	fwrite($arquivo, $texto); //acrescenta o texto no final do arquivo
	fclose($arquivo);

	header('Location: abrir_chamado.php');
 ?>