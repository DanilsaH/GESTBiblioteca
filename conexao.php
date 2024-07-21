<?php
class Conexao {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=biblioteca', 'root', '');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Erro de conexão: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>
