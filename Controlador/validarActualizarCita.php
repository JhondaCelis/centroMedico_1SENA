<?php
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/cita.php";

extract($_POST);

if (isset($_POST['idCita'])) {
    $objCita = new Cita();
    $resultado = $objCita->actualizarCita($_POST['idCita'], $_POST['fecha'], $_POST['hora'], $_POST['paciente'], $_POST['medico'], $_POST['consultorio'], $_POST['estado'], $_POST['observaciones']);

    if ($resultado) {
        header("Location: ../Vista/index2.php?pag=actualizarCita&msj=1");
    } else {
        header("Location: ../Vista/index2.php?pag=actualizarCita&msj=2");
    }
}
?>
