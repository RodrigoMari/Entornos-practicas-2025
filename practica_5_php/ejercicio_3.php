<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recomendar el Sitio</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      max-width: 600px;
      margin: 0 auto;
      padding: 2rem;
      background-color: #f8f9fa;
    }
    .recommendation-form {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    h1 {
      color: #2c3e50;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
      color: #2c3e50;
    }
    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    input[type="submit"] {
      background: #3498db;
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s;
      width: 100%;
    }
    input[type="submit"]:hover {
      background: #2980b9;
    }
  </style>
</head>
<body>
  <div class="recommendation-form">
    <h1>Recomendar este sitio a un amigo</h1>
    <form method="post">
    <label for="tu_nombre">Tu Nombre:</label>
    <input type="text" id="tu_nombre" name="tu_nombre" required><br><br>
    
    <label for="nombre_amigo">Nombre de tu Amigo:</label>
    <input type="text" id="nombre_amigo" name="nombre_amigo" required><br><br>
    
    <label for="email_amigo">Email de tu Amigo:</label>
    <input type="email" id="email_amigo" name="email_amigo" required><br><br>
    
    <input type="submit" value="Enviar Recomendación">
    </form>
  </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $asunto = "Recomendación de un amigo";
  
  if (isset($_POST['tu_nombre']) && isset($_POST['nombre_amigo']) && isset($_POST['email_amigo'])) {
  
    $tu_nombre = htmlspecialchars($_POST['tu_nombre']);
    $nombre_amigo = htmlspecialchars($_POST['nombre_amigo']);
    $email_amigo = htmlspecialchars($_POST['email_amigo']);
    
    $mensaje = "Hola $nombre_amigo,\n\n$tu_nombre te recomienda visitar este sitio web: [URL_DEL_SITIO]\n\n¡Espero que lo disfrutes!\n\nSaludos,\n$tu_nombre";
    
    if (mail($email_amigo, $asunto, $mensaje)) {
      echo "Recomendación enviada con éxito a $nombre_amigo.";
    } else {
      echo "Hubo un error al enviar la recomendación.";
    }
  }
} else {
  echo "Método de solicitud no válido.";
}
?>
