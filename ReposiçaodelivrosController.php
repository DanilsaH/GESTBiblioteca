<?php
require_once '../model/DAO/ReposicaoDAO.php';
require_once '../model/DTO/ReposicaoDTO.php';

class ReposicaoController {
    private $reposicaoDAO;

    public function __construct() {
        $this->reposicaoDAO = new ReposicaoDAO(Conexao::conectar());
    }

    public function reporLivro($idLivro, $quantidade) {
        $reposicaoDTO = new ReposicaoDTO();
        $reposicaoDTO->setIdLivro($idLivro);
        $reposicaoDTO->setQuantidade($quantidade);

        $this->reposicaoDAO->reporLivro($reposicaoDTO);
    }

    // Outros métodos para operações relacionadas à reposição de livros
}
?>
