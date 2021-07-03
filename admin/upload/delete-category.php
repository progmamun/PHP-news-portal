<?php
include 'config.php';
if ($_SESSION["user_role"] == '0') {
    header("Location: {$hostname}/admin/post.php");
}

$cat_id = $_GET["id"];

$sql = "DELETE FROM category WHERE category_id = '{$cat_id}'";

if (mysqli_query($conn, $sql)) {
    header("Location: {$hostname}/admin/category.php");
}

mysqli_close($conn);
