<?php

    use App\Controller\RouteController;    
 
    $routes = [
        null => [RouteController::class,'index'],
        '/index' => [RouteController::class,'index'],
        '/create' => [RouteController::class,'create'],
        '/store' => [RouteController::class,'store'],
        '/edit' => [RouteController::class,'edit'],
        '/update' => [RouteController::class,'update'],
        '/delete' => [RouteController::class,'delete']
    ];
    
    function notFound(){
        echo '404 not found';
    }
    
    if(array_key_exists('PATH_INFO',$_SERVER)){
        $pathInfo = $_SERVER['PATH_INFO'];
    }else{
        $pathInfo = '/index';
    }

    if(array_key_exists($pathInfo,$routes)){
        $controller = $routes[$pathInfo][0];
        $method = $routes[$pathInfo][1];
    }else{
        notFound();
        die();
    }

    $route = new $controller();
    echo $route->$method();

?>