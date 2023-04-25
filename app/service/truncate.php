<?php

    require_once "../../vendor/autoload.php";
    
    use App\database\DB;

    $database = new DB();

    $success = $database->truncate("beers");

    header('location: ../../index.php');


?>