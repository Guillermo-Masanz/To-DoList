<?php
    class Router {

        public function route($page) {

            switch ( $page ) {

                case "inicio":
                    require_once realpath(__DIR__ . '/../Views/Vista_Inicio.php');
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