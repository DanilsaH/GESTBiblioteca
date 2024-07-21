<?php
require_once '../model/DAO/VendaDAO.php';
require_once '../model/DTO/VendaDTO.php';

class VendaController {
    private $vendaDAO;

    public function __construct() {
        $this->vendaDAO = new VendaDAO(Conexao::conectar());
    }

    public function realizarVenda($idUsuario, $idLivro, $dataVenda) {
        $vendaDTO = new VendaDTO();
        $vendaDTO->setIdUsuario($idUsuario);
        $vendaDTO->setIdLivro($idLivro);
        $vendaDTO->setDataVenda($dataVenda);

        $this->vendaDAO->registrarVenda($vendaDTO);
    }

    // Outros métodos para operações relacionadas a vendas
}
?>
