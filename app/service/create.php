<?php

    ob_start();
    require_once "../../vendor/autoload.php";

    use App\database\DB;
    $database = new DB();

    $query = 
    [
        'name' => $_POST["name"],
        'country' => $_POST["country"],
        'price' => $_POST['price']
    ];

    try{
        $create=$database->insert("beers",$query);
        if($create){
            header("location: /../../index.php");
            exit;
        }    
    }catch(PDOException $error){
        header('location: /../../create.php?error=somethingwrong');
    }


?>