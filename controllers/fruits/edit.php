
<?php

require "Database.php";
require "Validator.php";

if (!isset($_GET["id"]) || empty($_GET["id"])) {
    redirectIFNotFound();
}

$sql = "SELECT * FROM fruits WHERE id = :id;"; 
$params = ["id" => $_GET["id"]];
$fruit = $db->query($sql, $params)->fetch();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["name"], min:2, max: 40)){
    $errors["name"]= "Auglim ir jabut";
    }
   
    elseif (empty($errors)) {
       $sql = "UPDATE fruits SET name = :name WHERE id = :id;";
        $params = ["name" => $_POST["name"], "id" => $_POST["id"]];
        $fruit = $db->query($sql, $params);

        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}
 $pageTitle = "edits";
 $style = "css/kopejais-stils.css";
 require "views/fruits/edit.view.php";