<?php
require_once '../model/DAO/ContatosDAO.php';

class ContatosController {
    private $contatosDAO;

    public function __construct() {
        $this->contatosDAO = new ContatosDAO(Conexao::conectar());
    }

    public function listarContatos() {
        return $this->contatosDAO->listarContatos();
    }
}
?>

