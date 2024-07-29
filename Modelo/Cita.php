<?php
require_once "conexionBaseDatos.php";

class Cita {
    private $db;

    public function __construct() {
        $this->db = Conectarse();
    }

    public function insertarCita($fecha, $hora, $paciente, $medico, $consultorio, $estado, $observaciones) {
        $sql = "INSERT INTO citas (citFecha, citHora, citPaciente, citMedico, citConsultorio, citEstado, citObservaciones) 
                VALUES ('$fecha', '$hora', '$paciente', '$medico', '$consultorio', '$estado', '$observaciones')";

        if ($this->db->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $this->db->error;
            return false;
        }
    }
}
?>
