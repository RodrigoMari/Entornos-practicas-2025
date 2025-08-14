<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fecha = date("d-m-Y");
  $hora = date("H:i:s");
  $destino = "destino@gmail.com"; 
  $asunto = "Comentario";

  if (isset($_POST['email']) && isset($_POST['nombre']) && isset($_POST['texto'])) {
    $desde = 'From:' . $_POST['email'];

    $comentario = "Nombre: " . $_POST['nombre'] . "\n";
    $comentario .= "Email: " . $_POST['email'] . "\n";
    $comentario .= "Consulta: " . $_POST['texto'] . "\n";
    $comentario .= "Enviado: $fecha a las $hora\n";

    if (mail($destino, $asunto, $comentario, $desde)) {
      echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";
    } else {
      echo "Hubo un error al enviar su consulta. Por favor, inténtelo más tarde.";
    }
    } else {
      echo "Por favor, complete todos los campos del formulario.";
  }
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Contacto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 20px;
      color: #333;
      max-width: 600px;
      margin: 0 auto;
    }
    fieldset {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
    }
    legend {
      font-weight: bold;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"], textarea {
      width: calc(100% - 22px);
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"] {
      background-color: #3498db;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <form method="post">
    <fieldset>
      <legend>Contacto</legend>
      <p>
        <label>Nombre
          <input type="text" name="nombre" size="25" required />
        </label>
      </p>
      <p>
        <label>Email
          <input type="text" name="email" size="25" required />
        </label>
      </p>
      <p>
        Comentario
        <label>
          <textarea name="texto" cols="32" rows="6" required></textarea>
        </label>
      </p>
      <input type="submit" value="Enviar"/>
    </fieldset>
  </form>
</body>
</html>
