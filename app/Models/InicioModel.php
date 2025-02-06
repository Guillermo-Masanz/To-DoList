<?php
    require_once realpath( __DIR__ . '/../Core/Database.php' );

    class InicioModel {

        private $db;

        public function __construct() {

            $this->db = new Database();

        }

        public function getTasks(): array {
            $result = $this->db->query('SELECT * FROM tasks');
            return $result->fetch_all(MYSQLI_ASSOC);
        }

    }
?>