<?php

// Dump and die
 if (!function_exists('dd')) {
function dd($value){ // $data ir ta arguments     dd ir nosaukums un tad ir funkcija(kermenis)
    echo"<pre>";// sakarto daudz skaidrak datus kas ir tikti izvadīti
    var_dump($value);
    echo"</pre>";
    die();
  }
 }
 if (!function_exists('redirectIFNotFound')) {
function redirectIFNotFound($location = "/"){
    http_response_code(404);
    header("Location: $location", 302);
    exit(); //liek die but softly
}
};