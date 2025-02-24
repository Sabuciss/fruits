
<?php

require "functions.php";
require "Database.php";


//uztaisīt filtru - ierakstu meklēšana
//1. izveido meklešanas joslu html formu, kura ir input, submit poga
//2. kaut ka sarakstīti php
//3. atgriest datus no sql datu bāzes

$config = require("config.php");

echo "Hi there  <br><br>";
// 1. Izveido datu bāzi ar tabulu
// ielogošanās
//Publicēt -> savienot ar datubāzi
// 2.Savienot php ar datu bāzi  db nosaukums , parole, lietotajvards  mysql_connect
//3.Izvadīt datus uz html
//  SELECT * FROM posts WHERE content LIKE \ 'slipsvitra ka to var izbeigt
$db = new Database($config["database"]);

$sql = "SELECT * FROM posts"; 

$params = [];//drošībai, lai db nevrētu izdzest kk random lietotājs
if (isset($_GET["search_query"])  && $_GET["search_query"] != ""){
   echo "Atgriest ierakstus";
   $search_query = "%" . $_GET["search_query"] . "%";
   $sql .= " WHERE content LIKE  :nosaukums"; //sql saistītie vaicājumi un parametri   sagatavaotais vaicājums
   $params = ["nosaukums" => $search_query];   //pats paramets                  
}
$posts = $db->query($sql, $params)->fetchAll();//lai nav jaraksta parak daudz citas metodes -fetchall

$pageTitle = "Blogs";
$style = "css/kopejais-stils.css";
require "views/posts/index.view.php";  //vienmēr ir pašā apakšā