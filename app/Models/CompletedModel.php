<?php
    require_once realpath( __DIR__ . '/../Core/Database.php' );

    class CompletedModel {

        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function setCompleted($id) {
            $result = $this->db->query("UPDATE tasks SET completed=1 WHERE id = $id");
        }

    }

?>