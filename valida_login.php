<?php 
	session_start();


	//variavel que verifica a autenticação
	$usuario_autenticado = false;

	$usuarios_app = array(
		array('email' => 'adnteste@gmail.com', 'senha' => 12345 ),
		array('email' => 'elvis@gmail.com', 'senha' => 12345 )
	);

	foreach ($usuarios_app as $user){
		if ($user['senha'] == $_POST['senha'] && $user['email'] == $_POST['email']) {
			$usuario_autenticado = true;

		}
	}
	
	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = 'SIM';
		echo "usuario autenticado";
		header('Location: home.php');
		}else{
			$_SESSION['autenticado'] = 'NAO';
			header('Location: index.php?login=erro');
		} 

 ?>