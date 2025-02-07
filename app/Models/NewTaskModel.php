<?php
    require_once realpath( __DIR__ . '/../Core/Database.php' );

    class NewTaskModel {

        private $db;
        public function __construct() {
            $this->db = new Database();
        }

        public function setTask($titulo, $description) {
            $this->db->escape($titulo);
            $this->db->escape($description);
            $result = $this->db->query("INSERT INTO tasks(title, description, completed) VALUES ('$titulo', '$description', 0)");
        }
    }

?>