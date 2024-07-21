<?php
class PermissoesDAO
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function listarPermissoes()
    {
         $query = "SELECT * FROM permissoes";
        $stmt = $this->conexao->prepare($query);
         $stmt->execute();
          return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inserirPermissao(PermissoesDTO $permissao)
    {
        $query = "INSERT INTO permissoes (id_usuario, permissao) VALUES (:id_usuario, :permissao)";
          $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":id_usuario", $permissao->getIdUsuario());
         $stmt->bindValue(":permissao", $permissao->getPermissao());
        $stmt->execute();
    }
}
?>
