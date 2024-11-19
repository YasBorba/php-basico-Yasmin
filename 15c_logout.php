<?php

// Página de logout (15c_logout.php)
session_start();

// Destroi a sesso do usuario
session_destroy();

header("Location: 15a_sistema.php");

exit();
?>
