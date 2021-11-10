<?php
    include('Variables.php');
?>
<div class="card">
    <div class="card__img">
        <?php
        // Incluimos el fragmento de esta tarjeta 
        include ('./fragmentos/'.$contarEnteros);
        $nombreArchivo = 'card/CardContarListaEnteros.php';
        ?>
        <!-- <img src="asserts/img/007-monitor-3.png" alt="" id="imagen" /> -->
        <a href="content.php?nombre=<?php echo $nombreArchivo ?>" class="card__enlace"></a>
        <span class="tipo__lenguaje">Java</span>
    </div>

    <div class="card__descripcion">
        <img src="asserts/img/logo.png" alt="" />
        <h2 class="card__subtitulo">Contar elementos de una lista</h2>
    </div>
</div>