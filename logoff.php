<?php

	session_start(); // sempre invocar quando for utilizar sessões, para o acesso a super golbal
	/*
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";

	echo "<hr/>";

	// remoção de índices do array de sessão
	//unset()
	
	unset($_SESSION['x']);

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";	
	
	// destruição da variável de sessão
	// session_destory()

	session_destroy();

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
	*/

	session_destroy();
	header('Location: index.php');