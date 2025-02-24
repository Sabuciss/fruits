<?php

require "Validator.php";

$sql = "SELECT * FROM fruits";
$categories = $db->query($sql, [])->fetchAll();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!Validator::string($_POST["content"], min:2, max: 40)) {
        $errors["content"] = "Saturam ir jābūt. Vismaz no 2 līdz 40 rakstzīmēm";
    }

    if (!empty($_POST["category_id"]) && !Validator::number($_POST["category_id"])) {
        $errors["category_id"] = "Nederīgs kategorijas ID.";
    }

    if (empty($errors)) {
        $category_id = !empty($_POST["category_id"]) ? (int) $_POST["category_id"] : null;

        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = [
            "content" => $_POST["content"],
            "category_id" => $category_id
        ];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

$pageTitle = "ierakstss";
$style = "css/kopejais-stils.css";

require "views/fruits/create.view.php";