<?php
    require_once realpath( __DIR__ . '/../Models/DeleteModel.php' );

    class DeleteController {

        public function index() {

            if ( isset($_GET['id']) ) {
                $DeleteModel = new DeleteModel();
                $deleted = $DeleteModel->setDeleted($_GET['id']);
                header('Location: index.php?pag=inicio');
            }

        }

    }

?>