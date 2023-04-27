<?php

    require_once "../../vendor/autoload.php";
    use App\Controller\BeerController;

    $beers = new BeerController();

    try{
        $beers->insert($_POST);
        header("location: ../../index.php");
    }catch(PDOException $err) {
        header("location: ../../create.php?error=something wrong");
    }


?>