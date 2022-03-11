<?php
session_start();
$db = @new mysqli('localhost', 'root', '', 'odev');
$db->set_charset("utf8")
?>