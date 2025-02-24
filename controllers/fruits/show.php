<?php 
require "Database.php";

if (!isset($_GET["id"]) || empty($_GET["id"])) {
    redirectIFNotFound();
}

 $sql = "SELECT *  FROM fruits  WHERE id = :id";

$params = ["id" => $_GET["id"]];
$fruit = $db->query($sql, $params)->fetch();

// Ja nav atrasts ieraksts, pārtrauc lapas ielādi
if (!$fruit) {
    redirectIFNotFound();
}

$pageTitle = "Augļi";
$style = "css/kopejais-stils.css";
require "views/fruits/show.view.php";