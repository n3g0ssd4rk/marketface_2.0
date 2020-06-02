<?php
    if (isset($_GET["id"])) {
        $item = "id";
        $valor = $_GET["id"];
        $info = Controladores::ctrComerciantes($item, $valor);
    }
?>
<?php foreach ($info as $key => $value): ?>
<style>
    .img_cab {
        background-image: url('demas/perfil/<?php echo $value["perfil"]; ?>');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 60vh;
    }
</style>
<div class="col-12 mb-3 img_cab">
</div>
<div class="col-6 mt-5 mr-5">
    <div class="row">
        <div class="col-12">
            <h1>
            <b><?php echo $value["nombre"]; ?></b>
            </h1>
        </div>
        <div class="col-12">
            <div class="row justify-content-around">
                <div class="col-5 m-1"><img src="demas/<?php echo (str_replace(" ", "_", $value["nombre"]))."/".$value["img"]; ?>" alt="" class="img-fluid"></div>
                <div class="col-5 m-1"><img src="demas/<?php echo (str_replace(" ", "_", $value["nombre"]))."/".$value["img2"]; ?>" alt="" class="img-fluid"></div>
                <div class="col-5 m-1"><img src="demas/<?php echo (str_replace(" ", "_", $value["nombre"]))."/".$value["img3"]; ?>" alt="" class="img-fluid"></div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
<div class="col-4 text-center mt-5 ml-5">
    <p><b><?php echo $value["nombre"]; ?></b> es un emprendimiento que se especializa en <b><?php echo $value["categoria"]; ?></b> en la zona de <b><?php echo $value["zona"]; ?></b>, la especialidad de <b><?php echo $value["nombre"]; ?></b> es <b><?php echo $value["descripcion"]; ?></b></p>
    <p>Puede comunicarse con ellos al <b><?php echo $value["whatsapp"]; ?></b></p>
</div>