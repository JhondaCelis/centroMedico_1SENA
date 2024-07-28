<?php
require_once 'Database.php';

class Cita {
  private $conn;

  public function __construct() {
    $database = new Database();
    $this->conn = $database->conn;
  }

  public function crearCita($nombre, $email, $telefono) {
    if (!empty($nombre) && !empty($email) && !empty($telefono)) {
      $stmt = $this->conn->prepare("INSERT INTO datos (nombre, email, telefono) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $nombre, $email, $telefono);

      if ($stmt->execute()) {
        return "Cita agendada";
      } else {
        return "Error: " . $stmt->error;
      }

      $stmt->close();
    } else {
      return "Todos los campos son obligatorios.";
    }
  }

  public function __destruct() {
    $this->conn->close();
  }
}
?>
