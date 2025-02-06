<?php
    class Router {

        public function route($page) {

            switch ( $page ) {

                case "inicio":
                    require_once realpath( __DIR__ . '/../Controllers/InicioController.php' );
                    $controller = new InicioController();
                    $controller = $controller->index();
                    break;

                case "NewTask":
                    require_once realpath( __DIR__ . '/../Views/Vista_NewTask.php' );

                case "ServiceDown":
                    require_once realpath(__DIR__ . '/../Views/Vista_ServiceDown.php');
                    break;

                default:
                    require_once realpath(__DIR__ . '/../Views/Vista_404.php');
                    break;
            }
            
        }

    }
?>