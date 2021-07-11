<?php include("../template/header.php"); ?>

<?php 
 
 $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";

$txtImagen=(isset($_FILES['txtID']['name']))?$_FILES['txtID']['name']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

echo $txtID."<br/>";
echo $txtNombre."<br/>";
echo $txtImagen."<br/>";
echo $accion."<br/>";  

//print_r($_POST);
//print_r($_FILES);

switch($accion) {

    case "Agregar";
      echo "Presionado boton agregar";
    break;

    case "Modificar";
      echo "Presionado boton modificar";
    break;  

    case "Cancelar";
      echo "Presionado boton cancelar";
    break;
}
?>

<div class="col-md-5">

<div class="card">
    <div class="card-header">
        Datos de libro
    </div>

    <div class="card-body">

      <form method="POST" enctype="multipart/form-data">

            <div class = "form-group">
                <label for="txtID">ID: </label>
                <input type="text" class="form-control" id="txtID" name="txtID" placeholder="ID">
            </div>

            <div class = "form-group">
                <label for="txtNombre">Nombre: </label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del libro">
            </div>
            
            <div class = "form-group">
                <label for="txtImagen">Imagen: </label>
                <input type="file" class="form-control" id="txtImagen" name="txtImagen" placeholder="Imagen">
            </div>

            <div class="btn-group" role="group" aria-label="">
                <button type="button" name="accion" value="Agregar" class="btn btn-success"> Agregar</button>
                <button type="button" name="accion" value="Modificar"  class="btn btn-warning">Modificar</button>
                <button type="button"name="accion" value="Cancelar"  class="btn btn-info">Cancelar</button>
            </div>

        </form>

        
    </div>

    
</div>


</div>

<div class="col-md-7">

   <table class="table table-bordered">
       <thead>
           <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Imagen</th>
               <th>Acciones</th>
           </tr>
       </thead>
       <tbody>
           <tr>
               <td>2</td>
               <td>Aprende php</td>
               <td>Imagen.jpg</td>
               <td>Seleccionar | Borrar</td>
           </tr>
          
       </tbody>
   </table>

    
</div>



<?php include("../template/footer.php"); ?>
