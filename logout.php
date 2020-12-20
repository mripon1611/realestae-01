<?php
session_start();
session_destroy();

echo "<script>location.assign('signin.php');</script>";


?>