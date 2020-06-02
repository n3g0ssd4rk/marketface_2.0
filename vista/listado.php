<?php
    if (isset($_GET["id"])) {
        $item = "id";
        $valor = $_GET["id"];
        $info = Controladores::ctrComerciantes($item, $valor);
    }
?>
<?php foreach ($info as $key => $value): ?>
    <p><?php echo $value["nombre"]; ?></p>
<?php endforeach ?>