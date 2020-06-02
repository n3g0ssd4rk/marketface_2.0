<div class="col-12 mb-4">
    <div class="row justify-content-around">
        <?php foreach ($comerciantes as $key => $value): ?>
            <div class="col-md-2 text-center p-3">
                <img src="demas/perfil/<?php echo (str_replace(" ", "_", $value["perfil"])); ?>" alt="<?php echo $value["nombre"]; ?>" class="img-fluid">
                <h5><?php echo $value["nombre"]; ?></h5>
                <p></p>
                <a href="index.php?pagina=info_comerciante&id=<?php echo $value["id"]; ?>"><button class="btn btn-info">Saber más</button></a>
            </div>
        <?php endforeach ?>
    </div>
</div>