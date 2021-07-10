<?php include("../template/header.php"); ?>

<div class="col-md-5">

<div class="card">
    <div class="card-header">
        Datos de libro
    </div>

    <div class="card-body">
            form method="POST" enctype="multipart/form-data">

            <div class = "form-group">
                <label for="txtID">ID: </label>
                <input type="text" class="form-control" id="txtID" name="txtID" placeholder="ID">
            </div>

            <div class = "form-group">
                <label for="txtnombre">Nombre: </label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del libro">
            </div>
            
            <div class = "form-group">
                <label for="txtnombre">Imagen: </label>
                <input type="file" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
            </div>

            <div class="btn-group" role="group" aria-label="">
                <button type="button" class="btn btn-success"> Agregar</button>
                <button type="button" class="btn btn-warning">Modificar</button>
                <button type="button" class="btn btn-info">Cancelar</button>
            </div>

        </form>

        
    </div>

    
</div>


</div>

<div class="col-md-7">

   <table class="table table-border">
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
