<?php

    require_once "../../vendor/autoload.php";
    use App\Controller\BeerController;

    $request_id = $_GET['id'];

    $controller = new BeerController();
    
    if($controller->destroy($request_id)) {
        header("location: ../../index.php");
    }
    

?>