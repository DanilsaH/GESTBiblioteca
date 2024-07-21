<?php
require_once '../model/DAO/PermissoesDAO.php';
require_once '../model/DTO/PermissoesDTO.php';

class PermissoesController {
    private $permissoesDAO;

    public function __construct() {
        $this->permissoesDAO = new PermissoesDAO(Conexao::conectar());
    }

    public function definirPermissoes($idUsuario, $permissoes) {
        $permissoesDTO = new PermissoesDTO();
        $permissoesDTO->setIdUsuario($idUsuario);
        $permissoesDTO->setPermissoes($permissoes);

        $this->permissoesDAO->definirPermissoes($permissoesDTO);
    }

    // Outros métodos para operações relacionadas a permissões
}
?>
