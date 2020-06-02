<div class="col-md-5 col-11 border rounded shadow">
    <form action="carga_datos.php" method="post" enctype="multipart/form-data">
        <div class="form-row pt-3">
            <div class="form-group col-md-4 ">
            <input type="text" class="form-control" name="comercial" placeholder="Nombre de comercio en facebook" required>
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" required>
                    <option>seleccione categoria</option>
                </select>
            </div>
            <div class="form-group col-md-4">
            <input type="text" class="form-control" name="categoria" placeholder="Agrega tu categoria" required>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="descripcion" rows="4" placeholder="Cuentanos cortamente sobre tu producto..." required></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <input type="text" class="form-control" name="what" placeholder="Whatsapp (opcional)">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="partido" placeholder="De donde eres?" required>
            </div>
            <div class="form-group col-md-4">
                <input type="mail" class="form-control" name="mail" placeholder="Tu mail (No se lo daremos a nadie!)">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="exampleFormControlFile1">Foto para tu perfil</label>
            <input type="file" class="form-control-file" name="img" required>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlFile1">Foto de producto N°1</label>
                <input type="file" class="form-control-file" name="img1" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="exampleFormControlFile1">Foto de producto N°2</label>
            <input type="file" class="form-control-file" name="img2" required>
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlFile1">Foto de producto N°3</label>
                <input type="file" class="form-control-file" name="img3" required>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="face" placeholder="link de facebook..." required>
        </div>
        <button type="submit" class="btn btn-info m-2 text-center">Unete</button>
    </form>
</div>