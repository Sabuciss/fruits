<?php

require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = []; 

    if (!Validator::string($_POST["name"], min:2, max: 40)) {
        $errors["name"] = "Auglim ir jābūt no 2 līdz 40 rakstzīmēm.";
    }

    elseif (empty($errors)) {
        $sql = "INSERT INTO fruits (name) VALUES (:name)";
        $params = ["name" => $_POST["name"]];  // Pareizi aizvērtas iekavas
        $db->query($sql, $params); // Izpilda SQL vaicājumu

        // Pāradresē uz sākuma lapu pēc veiksmīgas ievades
        header("Location: /");
        exit();
    }
}

$pageTitle = "Izveido augli";
$style = "css/kopejais-stils.css";

require "views/fruits/create.view.php";
