<?php

	//echo "Lógica ok!";

	session_start();

	//$_SESSION['x'] = 'Olá, sou um valor de sessão!';
	print_r($_SESSION);
	echo '<hr/>';

	// variável para verificar se a autenticação teve sucesso
	$usuario_autenticado = false;

	// varável de ID do usuário
	$usuario_id = null;

	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2 => 'Usuario');

	// Relação de usuários do sistema (sem BD)
	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2)
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
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}

	}

	if($usuario_autenticado){
		echo 'Usuário autenticado!';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		// $_SESSION['y'] = 'Outro valor'; (criado para testes)
		header('Location: home.php');
	}else{
		// echo 'Erro na autenticação do usuário!';
		$_SESSION['autenticado'] = 'NAO';
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