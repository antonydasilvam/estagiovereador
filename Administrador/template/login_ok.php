<?php

    session_start();
    include_once '../administradores/funcoes.class.php';

    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $objLogar = new FuncoesAdministradores();
    $resultado = $objLogar->login($usuario, $senha);

    if($resultado == 1){
       $_SESSION['id'] = $resultado->id;
       $_SESSION['usuario'] = $resultado->usuario;
       $_SESSION['login'] = true;
       print_r($_SESSION);
        echo "Logado com Sucesso";
        header("location:index.php");
    }
    else{
        header("location:login.php");
    }