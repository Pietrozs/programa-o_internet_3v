<?php 
require_once __DIR__ . '/../config/database.php';

class Usuario {

    private $conexao;

    public function __construct() {
        $database = new Database(); 
        $this->conexao = $database->conectar();
    }

    public function BuscarPorEmail($email) {
        $query = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam('s', $email);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
}