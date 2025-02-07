<?php
    require_once realpath( __DIR__ . '/../Core/Database.php' );

    class DeleteModel {

        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function setDeleted($id) {
            $result = $this->db->query("DELETE FROM tasks WHERE id = $id");
        }

    }

?>