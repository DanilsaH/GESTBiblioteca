<?php
class UsuarioDTO {
    private $id;
    private $usuario;
    private $senha;

    public function __construct($id = null, $usuario = null, $senha = null) {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
}
?>

