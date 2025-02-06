<?php
    require_once realpath( __DIR__ . '/../Models/InicioModel.php' );

    class InicioController {

        public function index(): void {

            $inicioModel = new InicioModel();
            $tasks = $inicioModel->getTasks();
            require_once realpath( __DIR__ . '/../Views/Vista_Inicio.php' );

        }

    }
?>