<?php
require_once '../model/DAO/MultaDAO.php';
require_once '../model/DTO/MultaDTO.php';

class MultaController {
    private $multaDAO;

    public function __construct() {
        $this->multaDAO = new MultaDAO(Conexao::conectar());
    }

    public function aplicarMulta($idUsuario, $idLivro, $valor, $data) {
        $multaDTO = new MultaDTO();
        $multaDTO->setIdUsuario($idUsuario);
        $multaDTO->setIdLivro($idLivro);
        $multaDTO->setValor($valor);
        $multaDTO->setData($data);

        $this->multaDAO->aplicarMulta($multaDTO);
    }

    // Outros métodos para operações relacionadas a multas
}
?>
