<?php

    require_once "../../vendor/autoload.php";
    
    use App\Controller\BeerController;
    use Symfony\Component\HttpFoundation\Request;

    $request = Request::createFromGlobals();
    $beers = new BeerController();


    try{
        $beers->insert($_POST);
        header("location: ../../index.php");
    }catch(PDOException $err) {
        header("location: ../../create.php?error=something wrong");
    }


?>