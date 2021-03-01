<?php
session_start();
unset($_SESSION['mywebsite']);
session_unset();
session_destroy();
echo '<script>location.replace("index.php")</script>';
?>