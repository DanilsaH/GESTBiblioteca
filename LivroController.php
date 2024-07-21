<?php
require_once '../model/DAO/LivroDAO.php';
require_once '../model/DTO/LivroDTO.php';

class LivroController {
    private $livroDAO;

    public function __construct() {
        $this->livroDAO = new LivroDAO(Conexao::conectar()); // Conexao::conectar() deve ser implementado conforme sua conexão
    }

    public function listarLivros() {
        return $this->livroDAO->listarLivros();
    }

    public function cadastrarLivro($titulo, $autor, $quantidade) {
        $livroDTO = new LivroDTO();
        $livroDTO->setTitulo($titulo);
        $livroDTO->setAutor($autor);
        $livroDTO->setQuantidade($quantidade);

        $this->livroDAO->inserirLivro($livroDTO);
    }

    // Outros métodos para atualizar, deletar, etc., conforme necessário
}
?>
