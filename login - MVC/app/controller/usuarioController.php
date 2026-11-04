<?php

class UsuarioController{

    private $usuarioModel;

    public function __construct($usuarioModel){
        $this->usuarioModel = new Usuario();
    }

    public function index(){
        if(isset($_SESSION['id'])){
            header('Location: index.php?action=painel');
        }

        include __DIR__ . '/../view/login.php';
    }

    public function autenticar(){
        if(isset($_POST['email']) && isset($_POST['senha'])){
            header('Location: index.php');
            exit;
        }

        $email = trim($_POST['email']);
        $senha = $_POST['senha'];

        if(empty($email) || empty($senha)){
            $erro = "Preencha todos os campos, jogador.";
            include __DIR__ . '/../view/login.php';
            return;
        }
    }

}