<?php if($_POST["submit"]){
echo "<form action=POST enctype=multipart/form-data>
<input type=text placeholder=nombre de la imagen name=img_n><br><br>
<input type=file name=img><br><br>
<button type=submit name=submit>subir</button>
</form>";
}
?>