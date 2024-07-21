<?php
class LivroDTO {
    private $id;
    private $titulo;
    private $autor;
    private $quantidade;

    public function __construct($id, $titulo, $autor, $quantidade) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->quantidade = $quantidade;
    }

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
}
?>
