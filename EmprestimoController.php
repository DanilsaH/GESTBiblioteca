<?php
require_once '../model/DAO/EmprestimoDAO.php';
require_once '../model/DTO/EmprestimoDTO.php';

class EmprestimoController {
    private $emprestimoDAO;

    public function __construct() {
        $this->emprestimoDAO = new EmprestimoDAO(Conexao::conectar()); // Conexao::conectar() deve ser implementado conforme sua conexão
    }

    public function realizarEmprestimo($idUsuario, $idLivro, $dataEmprestimo, $dataDevolucao) {
        $emprestimoDTO = new EmprestimoDTO();
        $emprestimoDTO->setIdUsuario($idUsuario);
        $emprestimoDTO->setIdLivro($idLivro);
        $emprestimoDTO->setDataEmprestimo($dataEmprestimo);
        $emprestimoDTO->setDataDevolucao($dataDevolucao);

        $this->emprestimoDAO->registrarEmprestimo($emprestimoDTO);
    }

    public function registrarDevolucao($idEmprestimo, $dataDevolucao) {
        $emprestimoDTO = new EmprestimoDTO();
        $emprestimoDTO->setIdEmprestimo($idEmprestimo);
        $emprestimoDTO->setDataDevolucao($dataDevolucao);

        $this->emprestimoDAO->