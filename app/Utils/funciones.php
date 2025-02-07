<?php
    function verArray($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    function sanear($valor) {
        return htmlspecialchars(trim($valor));
    }
?>