<?php
extract($_REQUEST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/tratamiento.php";

if (isset($_REQUEST['idTratamiento'])) {
    $objTratamiento = new Tratamiento();
    $resultado = $objTratamiento->ConsultarIdTratamiento($_REQUEST['idTratamiento']);
    if (isset($resultado)) {
        if ($resultado->num_rows > 0) {
            $registro = $resultado->fetch_object();
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <title>Editar Tratamiento</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            </head>
            <body>
            <div class="container">
                <h3 class="text-center">Favor Verifique la Siguiente Información del Tratamiento...</h3>
                <hr />
                <div class="form-horizontal">
                    <form id="form1" name="form1" action="../Controlador/validarActualizarTratamiento.php" method="POST">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nombre Tratamiento</label>
                            <input class="form-control col-sm-5" name="nombre" type="text" id="nombre" value="<?php echo $registro->tratNombre ?>">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Duración (meses)</label>
                            <input class="form-control col-sm-5" name="duracion" type="number" id="duracion" value="<?php echo $registro->tratDuracion ?>">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Costo</label>
                            <input class="form-control col-sm-5" name="costo" type="number" id="costo" value="<?php echo $registro->tratCosto ?>">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label"></label>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
                            </div>
                        </div>
                        <input name="idTratamiento" type="hidden" value="<?php echo $registro->idTratamiento ?>">
                    </form>
                    <hr />
                </div>
            </div>
            </body>
            </html>
            <?php
        }
    }
}
?>
