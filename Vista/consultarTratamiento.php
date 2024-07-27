<!DOCTYPE html>
<html lang="en">
<head>
  <title>MeDSyS</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h3 class="text-center pt-5">Digite el Nombre del Tratamiento a Consultar...</h3>
    <hr />
    <div class="form-horizontal">
      <form id="form1" name="form1" action="../Controlador/validarConsultarTratamiento.php" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label">Nombre del Tratamiento</label>
          <input name="nombreTratamiento" type="text" id="nombreTratamiento" class="form-control col-sm-5" required>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label"></label>
          <div class="col-sm-5">
            <button type="submit" class="btn btn-warning btn-block">Buscar</button>
          </div>
        </div>
      </form>
      <hr />
      
      <?php if (isset($_GET['msj'])): ?>
        <?php if ($_GET['msj'] == 1): ?>
          <div class="alert alert-success text-center">Tratamiento(s) encontrado(s).</div>
        <?php elseif ($_GET['msj'] == 2): ?>
          <div class="alert alert-danger text-center">El tratamiento no se encontró.</div>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (isset($_SESSION['resultadoTratamiento'])): ?>
        <?php $resultado = $_SESSION['resultadoTratamiento']; ?>
        <h1 align="center">DATOS DEL TRATAMIENTO</h1>
        <table class="table table-hover text-center mt-3">
          <thead>
            <th class="text-center">Nombre Tratamiento</th>
            <th class="text-center">Duración</th>
            <th class="text-center">Costo</th>
          </thead>
          <?php while ($registro = $resultado->fetch_object()): ?>
            <tr>
              <td><?php echo $registro->tratNombre; ?></td>
              <td><?php echo $registro->tratDuracion; ?></td>
              <td><?php echo $registro->tratCosto; ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
        <?php unset($_SESSION['resultadoTratamiento']); ?>
      <?php endif; ?>
    </div>
  </div>
</body>
<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
