<?php

    session_start();
    include_once '../administradores/funcoes.class.php';

    
    $usuario = $_POST['usuario'];
	$senha = sha1($_POST['senha']);
	/*var_dump($usuario,$senha);
	exit();*/
	$recaptcha = $_POST["g-recaptcha-response"];
    $objLogar = new FuncoesAdministradores();
	$resultado = $objLogar->login($usuario, $senha);

	$a  = array();

	//var_dump($resultado !== $a, $a, $resultado);die;

	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LcD5MUUAAAAAPIb-hPJxC693zPfbMNaPCQ5RNlf',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {
		// No eres un robot, continuamos con el envío del email
		// ...
        // ...
        if($resultado !== $a){
            // $_SESSION['id'] = $resultado->id;
            // $_SESSION['usuario'] = $resultado->usuario;
            $_SESSION['login'] = true;
            print_r($_SESSION);
            echo "Logado com Sucesso";
            header("location:index.php");
         }
         else{
             header("location:login.php");
         }


	} else {
		header("location:login.php");
	}




 