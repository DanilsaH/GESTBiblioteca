<?php
require_once '../model/DAO/BibliotecaDAO.php';
require_once '../model/DTO/BibliotecaDTO.php';

class BibliotecaController {
    private $bibliotecaDAO;

    public function __construct() {
        $this->bibliotecaDAO = new BibliotecaDAO(Conexao::conectar());
    }

    public function listarBibliotecas() {
        return $this->bibliotecaDAO->listarBibliotecas();
    }

    public function cadastrarBiblioteca($nome, $endereco) {
        $bibliotecaDTO = new BibliotecaDTO();
        $bibliotecaDTO->setNome($nome);
        $bibliotecaDTO->setEndereco($endereco);

        $this->bibliotecaDAO->inserirBiblioteca($bibliotecaDTO);
    }

    // Outros métodos para operações relacionadas a bibliotecas
}
?>