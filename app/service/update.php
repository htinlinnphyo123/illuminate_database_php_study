<?php

    require_once "../../vendor/autoload.php";

    use App\database\DB;

    if($_POST['name']==='' || $_POST['price']==='') {
        header('location: ../../editPage.php?error=something wrong');
    }

    $database = new DB();

    $query = 
    [
        'name' => $_POST['name'],
        'country' => $_POST['country'],
        'price' => $_POST['price']
    ];

    $id = $_POST['id'];

    $success = $database->update("beers",$id,$query);

    if($success == 1 || $success == 0) {
        header('location: ../../index.php');
    }



?>