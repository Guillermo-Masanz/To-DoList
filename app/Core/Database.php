<?php
    require_once realpath(__DIR__ . '/../../config/config.php');

    class Database {

        private $conexion;

        public function __construct() {

            try {
                $this->conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            } catch (Exception $e) {
                header('Location: index.php?page=ServiceDown');
                exit();
            }
        }

        public function query($sql)  {
            return $this->conexion->query($sql);
        }

        public function escape($value) {
            return $this->conexion->real_escape_string($value);
        }
        
        public function close() {
            $this->conexion->close();
        }

    }
?>