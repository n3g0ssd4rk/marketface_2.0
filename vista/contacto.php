<div class="col-md-4 border rounded">
    <form action="includes/enviar_consulta.php" method="post" enctype="multipart/form-data">
        <div class="form-group pt-4 pl-1 pr-1">
            <textarea class="form-control" name="consulta" rows="10" placeholder="Dejame saber tus dudas, quejas y opniciones..."></textarea>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="nombre" placeholder="Como te llamas?">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="mail" placeholder="A donde te contesto?">
        </div>
        <button type="submit" class="btn btn-primary m-2 text-center">Enviar</button>
    </form>
</div>