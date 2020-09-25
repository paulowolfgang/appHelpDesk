<?php

	//echo "Lógica ok!";

	// variável para verificar se a autenticação teve sucesso
	$usuario_autenticado = false;

	// Relação de usuários do sistema (sem BD)
	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => 'abcd')
	);

	/*
	echo '<pre>';
		print_r($usuarios_app);
	echo '</pre>';
	*/

	foreach($usuarios_app as $user){
		//print_r($user);
		
		/*
		echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];
		echo '<br/>';
		echo 'Usuário form: ' . $_POST['email'] . ' / ' . $_POST['senha']; 

		echo '<hr/>'; */

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
		}

	}

	if($usuario_autenticado){
		echo 'Usuário autenticado!';
	}else{
		// echo 'Erro na autenticação do usuário!';
		header('Location: index.php?login=erro');
	}


	/* ### Método GET ###

	echo "<pre>";
		print_r($_GET);
	echo "</pre>";

	echo "<br/>";

	echo $_GET['email'];
	echo "<br/>";
	echo $_GET['senha'];
	*/

	/* ### Método POST ###

	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

	echo "<br/>";

	echo $_POST['email'];
	echo "<br/>";
	echo $_POST['senha'];
	*/