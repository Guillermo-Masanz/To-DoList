<?php
    include realpath( __DIR__ . '/../Utils/Includes/cabecera.php' );
    if ( isset($tasks) ) {

        if ( empty($tasks) ) {
            echo '<h1>No hay nada por aquí, agregue una tarea</h1>';
        } else {
            foreach ( $tasks as $task ) {
                ($task['completed'] == 0) ? $estado = 'Pendiente' : $estado = 'Completado';
                echo '
                <div class="tarjeta">
                    <p class="estado'. $estado .'">'. $estado .'</p>
                    <h1>'. $task['title'] .'</h1>
                    <p>'. $task['description'] .'</p>
                    <div class="botones">
                        <a href="index.php?pag=Completed&id='. $task['id'] .'" class="completed">Completar</a>
                        <a href="index.php?pag=Delete&id='. $task['id'] .'" class="delete">Borrar</a>
                    </div>
                </div>
                ';
            }
        }

    }
?>

<?php
    include realpath( __DIR__ . '/../Utils/Includes/pie.php' );
?>