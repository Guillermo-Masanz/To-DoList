<?php
    class Router {

        public function route($page) {

            switch ( $page ) {

                case "inicio":
                    require_once realpath( __DIR__ . '/../Controllers/InicioController.php' );
                    $controller = new InicioController();
                    $controller->index();
                    break;

                case "NewTask":
                    require_once realpath( __DIR__ . '/../Controllers/NewTaskController.php' );
                    $controller = new NewTaskController();
                    $controller->index();
                    break;

                case "Completed":
                    require_once realpath( __DIR__ . '/../Controllers/CompletedController.php' );
                    $controller = new CompletedController();
                    $controller->index();
                    break;

                case "Delete":
                    require_once realpath( __DIR__ . '/../Controllers/DeleteController.php' );
                    $controller = new DeleteController();
                    $controller->index();
                    break;

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