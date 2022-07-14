<?php
session_start();
session_destroy();
header('Location: http://localhost/webDev_project/index.php');

?>