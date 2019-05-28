<?php 
	session_start();
	//remover indicies do array de sessão
	//unset(array[indice a ser eliminado])//remove indice apenas se existir
	//unset($_SESSION['autenticado']);//nao retorna erro caso não exista

	//destruir a variavel sessão
	//session_destroy()
	session_destroy(); //será destruida mas ainda fica disponivel na sessao atual pois ja fora carregada
	//redireciona normalmente para formçar o reload
	header('Location: index.php ');
 ?>