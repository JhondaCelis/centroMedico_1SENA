<!DOCTYPE html>
<html lang="en">

<head>
  <title>MeDSyS</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
  <div class="container-fluid cabecera fixed-top">
    <div class="row">
      <div class="col-md-2 logo">
        <span class="float-left">
          <p>MeDSyS</p>
        </span>
        <span class="lema">
          <span class="negrita"> <a href="index2.php">SISTEMA MEDICO</a></span><br>
          <span class="negrita">Usuario:</span><?php echo $_SESSION['user'] ?>
        </span>
      </div>

      <div class="col-md-10 menu navbar navbar-expand-md navbar-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

          <!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#uno"-->

          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <!--div class="collapse navbar-collapse" id="uno"-->

          <ul class="navbar-nav ">

            <li class="nav-item dropdown nav-item active">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Usuarios </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarUsuario">Agregar Usuarios</a>
                <a class="dropdown-item" href="index2.php?pag=consultarUsuario">Consultar Usuarios</a>
              </div>
            </li>

            <li class="nav-item dropdown active text-light">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pacientes
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarPaciente">Agregar Pacientes</a>
                <a class="dropdown-item" href="index2.php?pag=ConsultarPaciente">Consultar Pacientes</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarPaciente">Editar Pacientes</a>
                <a class="dropdown-item" href="index2.php?pag=listarPacientes">Listar Pacientes</a>
              </div>
            </li>

            <li class="nav-item dropdown active text-light">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Citas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarPaciente">Agregar Cita</a>
                <a class="dropdown-item" href="index2.php?pag=ConsultarPaciente">Consultar Cita</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarPaciente">Editar Cita</a>
                <a class="dropdown-item" href="index2.php?pag=listarPacientes">Listar Cita</a>
              </div>
            </li>

            <li class="nav-item dropdown active text-light">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Consultorio
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarConsultorio">Agregar Consultorio</a>
                <a class="dropdown-item" href="index2.php?pag=buscarConsultorio">Buscar Consultorio</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarConsultorio">Editar Consultorio</a>
                <a class="dropdown-item" href="index2.php?pag=listarConsultorios">Listar Consultorios</a>
              </div>
            </li>

            <li class="nav-item dropdown active text-light">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tratamientos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index2.php?pag=insertarTratamiento">Agregar Tratamiento</a>
                <a class="dropdown-item" href="index2.php?pag=consultarTratamiento">Consultar Tratamiento</a>
                <a class="dropdown-item" href="index2.php?pag=actualizarTratamiento">Editar Tratamiento</a>
                <a class="dropdown-item" href="index2.php?pag=listarTratamiento">Listar Tratamiento</a>
              </div>
            </li>



            <ul class="nav-item navbar-nav navbar-right">

              <li><a class="text-light" href="salir.php"><span class="glyphicon glyphicon-log-in text-light"></span>
                  Cerrar Sesión</a></li>
            </ul>

          </ul>

        </div>
      </div>
    </div>
  </div>
  </div>
  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>