<?php
    require_once realpath( __DIR__ . '/../Models/NewTaskModel.php' );

    class NewTaskController {

        public function index() {

            if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {

                $errores = [];

                $titulo = sanear($_POST['titulo']);
                $descripcion = sanear($_POST['descripcion']);
                
                if ( empty($titulo) ) {
                    $errores['Titulo'] = 'Por favor introduzca un título.';
                }

                if ( empty($descripcion) ) {
                    $errores['Descripcion'] = 'Por favor introduzca una descripción.';
                }

                if ( empty($errores) ) {

                    $NewTaskController = new NewTaskModel();
                    $insercion = $NewTaskController->setTask($titulo, $descripcion);

                    unset($titulo);
                    unset($descripcion);

                    header('Location: index.php?pag=inicio');

                } else {

                    require_once realpath( __DIR__ . '/../Views/Vista_NewTask.php');

                }

            } else {

                require_once realpath( __DIR__ . '/../Views/Vista_NewTask.php');

            }
        }
    }

?>