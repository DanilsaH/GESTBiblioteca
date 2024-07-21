<?php
require_once '../model/DAO/RegistroAcoesDAO.php';
require_once '../model/DTO/RegistroAcoesDTO.php';

class RegistroAcoesController {
    private $registroAcoesDAO;

    public function __construct() {
        $this->registroAcoesDAO = new RegistroAcoesDAO(Conexao::conectar());
    }

    public function registrarAcao($idUsuario, $acao, $data) {
        $registroAcoesDTO = new RegistroAcoesDTO();
        $registroAcoesDTO->setIdUsuario($idUsuario);
        $registroAcoesDTO->setAcao($acao);
        $registroAcoesDTO->setData($data);

        $this->registroAcoesDAO->registrarAcao($registroAcoesDTO);
    }

    // Outros métodos para operações relacionadas ao registro de ações
}
?>
