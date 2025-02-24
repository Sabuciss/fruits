<?php 
require "Database.php";

if (!isset($_GET["id"]) || empty($_GET["id"])) {
    redirectIFNotFound();
}

$sql = "SELECT posts.*, fruits.fruit_name 
        FROM posts
        LEFT JOIN fruits ON posts.category_id = fruits.id
        WHERE posts.id = :id";

$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

// Ja nav atrasts ieraksts, pārtrauc lapas ielādi
if (!$post) {
    redirectIFNotFound();
}

$pageTitle = "Postii";
$style = "css/kopejais-stils.css";
require "views/posts/show.view.php";