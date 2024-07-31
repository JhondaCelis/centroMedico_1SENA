<!DOCTYPE html>
<html lang="en">
<head>
     
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">   
  
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  <title>SETM</title>

</head>
<body>
 
   <div class="container">
    <h3 class="text-center pt-5"> Favor Agregar la siguiente información</h3>
  <hr />
    <div class="form-horizontal">
      <form id="form1" name="form1" action="../Controlador/validarInsertarTratamiento.php" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label" >Nombre Tratamiento</label>
           <input name="nombre" type="text" id="nombre" placeholder="Digite el nombre del tratamiento" class="form-control col-sm-5" required>
        </div>
         <div class="form-group">
          <label class="col-sm-4 control-label" >Duracion</label>
           <input name="duracion" type="number" id="duracion" placeholder="Digite los meses de duracion" class="form-control col-sm-5" required>
        </div>
       
        <div class="form-group">
          <label class="col-sm-4 control-label" >Costo</label>
           <input name="costo" type="number" id="costo" placeholder= "Digite el costo" class="form-control col-sm-5" required>
        <div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-warning btn-block"> Guardar</button>        
            </div>    
          </div>   
        </div>   
      </form>
      <hr />
    </div>
  </div>

</body>

  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>

<?php
  if($msj==1){
    ?>
      <script type="text/javascript">
      alert("El registro se ha guardado correctamente!");
      window.location.href='index2.php';
      </script>
      <?php
    };
  if($msj==2){
    ?>
    <script type="text/javascript">
    alert("El registro no pudo ser guardado, favor validar!");
    window.location.href='index2.php';
    </script>
  <?php
}
?>