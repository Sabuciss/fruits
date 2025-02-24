<?php

$sql = "DELETE FROM posts WHERE id = :id;"; 

$params = ["id" => $_POST["id"]]; // Ensure id is coming from a valid POST request

$post = $db->query($sql, $params); // No need for fetch() since DELETE doesn't return rows

header("Location: /");
exit();
 $pageTitle = "edits";
 $style = "css/kopejais-stils.css";
 require "views/posts/edit.view.php";