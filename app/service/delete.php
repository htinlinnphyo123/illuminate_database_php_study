<?php

    require_once "../../vendor/autoload.php";
    use App\database\DB;

    $database = new DB();
    
    $request_id = $_GET['id'];

    $delete = $database->delete("beers",$request_id);

    if($delete==1) {
        header('location: ../../index.php');
    }

?>