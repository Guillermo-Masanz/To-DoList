<?php
    require_once realpath( __DIR__ . '/../app/Core/Router.php' );
    require_once realpath( __DIR__ . '/../app/Utils/funciones.php' );

    $page = (isset($_GET['pag'])) ? $_GET['pag'] : 'inicio';

    $router = new Router();
    $router->route($page);

?>