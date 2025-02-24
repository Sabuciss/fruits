
<?php

require "Database.php";
require "Validator.php";

if (!isset($_GET["id"]) || empty($_GET["id"])) {
    redirectIFNotFound();
}

$sql = "SELECT * FROM posts WHERE id = :id;"; 
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIFNotFound();
}
$sql = "SELECT * FROM fruits";
$categories = $db->query($sql, [])->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["content"], min:2, max: 40)){
    $errors["content"]= "Auglim ir jabut";
    }
   
    elseif (empty($errors)) {
        $sql = "UPDATE posts SET content = :content, category_id = :category_id WHERE id = :id";
        $params = ["id" => $_POST["id"], "content" => $_POST["content"], "category_id" => $_POST["category_id"] ];
        $db->query($sql, $params);

        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}

 $pageTitle = "edits";
 $style = "css/kopejais-stils.css";
 require "views/fruits/edit.view.php";