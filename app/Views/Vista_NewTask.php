<?php
    include realpath( __DIR__ . '/../Utils/Includes/cabecera.php' );
?>

<div class="formulario">
    <form action="index.php?pag=NewTask" method="post">
        
        <label for="titulo">Titulo <span class="obligatorio">*</span></label>
        <input type="text" name="titulo" id="titulo" value='<?php if(isset($titulo)) { echo $titulo; } ?>' >
        <span class="error">
            <?php
                if ( isset($errores['Titulo']) ) { echo $errores['Titulo']; }
            ?>
        </span>

        <label for="descripcion">Descripción <span class="obligatorio">*</span></label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" value='<?php if(isset($descripcion)) { echo $descripcion; } ?>' ></textarea>
        <span class="error">
            <?php
                if ( isset($errores['Descripcion']) ) { echo $errores['Descripcion']; }
            ?>
        </span>

        <input type="submit" value="Añadir" name="add">
    
    </form>
</div>

<?php
    include realpath( __DIR__ . '/../Utils/Includes/pie.php' );
?>