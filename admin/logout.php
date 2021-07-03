<?php
include "config.php";

session_star();

session_unset();

session_destroy();

header("Location: {$hostname}/admin/")
?>
