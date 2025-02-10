<?php
    require_once realpath( __DIR__ . '/../Models/CompletedModel.php' );

    class CompletedController {

        public function index() {

            if ( isset($_GET['id']) ) {
                $CompletedModel = new CompletedModel();
                $CompletedModel->setCompleted($_GET['id']);
                header('Location: index.php?pag=inicio');
            }
        }
    }

?>