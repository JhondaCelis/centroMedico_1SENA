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
      <form id="form1" name="form1" action="../Controlador/validarInsertarConsultorio.php" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label" >Nombre de Consultorio</label>
           <input name="conNombre" type="text" id="conNombre" placeholder="Digite el Nombre del Consultorio" class="form-control col-sm-5" required>
        </div>
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
};

?>