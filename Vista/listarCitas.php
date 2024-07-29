<?php
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/cita.php";

$objCita = new Cita();
$citas = $objCita->ListarCitas();
?>

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
    <link rel="stylesheet" href="js/sweetalert/sweetalert2.min.css">
</head>
<body>
    <div class="container-fluid">
        <h1 align="center" class="mt-5">Información de los registros de Citas</h1>
        <table class="table table-hover text-center">
            <thead>
                <tr align="center" bgcolor="#ffc800">
                    <th class="text-center">ID Cita</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Hora</th>
                    <th class="text-center">Paciente</th>
                    <th class="text-center">Medico</th>
                    <th class="text-center">Consultorio</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Observaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($cita = $citas->fetch_object()) {
                    echo "<tr>";
                    echo "<td>{$cita->idCita}</td>";
                    echo "<td>{$cita->citFecha}</td>";
                    echo "<td>{$cita->citHora}</td>";
                    echo "<td>{$cita->citPaciente}</td>";
                    echo "<td>{$cita->citMedico}</td>";
                    echo "<td>{$cita->citConsultorio}</td>";
                    echo "<td>{$cita->citEstado}</td>";
                    echo "<td>{$cita->citObservaciones}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
   
