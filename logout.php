<?php
session_start();
session_destroy();
echo "<script>alert('Você deslogou da sua conta.')
;history.back()</script>";
?>