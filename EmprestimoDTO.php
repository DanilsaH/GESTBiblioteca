<?php
class EmprestimoDTO {
    private $id;
    private $idUsuario;
    private $idLivro;
    private $dataEmprestimo;
    private $dataDevolucao;

    public function __construct($id, $idUsuario, $idLivro, $dataEmprestimo, $dataDevolucao) {
        $this->id = $id;
        $this->idUsuario = $idUsuario;
        $this->idLivro = $idLivro;
        $this->dataEmprestimo = $dataEmprestimo;
        $this->dataDevolucao = $dataDevolucao;
    }

    public function getId() {
        return $this->id;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getIdLivro() {
        return $this->idLivro;
    }

    public function getDataEmprestimo() {
        return $this->dataEmprestimo;
    }

    public function getDataDevolucao() {
        return $this->dataDevolucao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setIdLivro($idLivro) {
        $this->idLivro = $idLivro;
    }

    public function setDataEmprestimo($dataEmprestimo) {
        $this->dataEmprestimo = $dataEmprestimo;
    }

    public function setDataDevolucao($dataDevolucao) {
        $this->dataDevolucao = $dataDevolucao;
    }
}
?>

