<?php

    require_once "../../vendor/autoload.php";

    use App\database\DB;
    use App\Model\Beer;

    if($_POST['name']==='' || $_POST['price']==='') {
        header('location: ../../editPage.php?error=something wrong');
    }

    $database = new DB();

    $id = $_POST['id'];

    try{
        if( Beer::find($id)->update($_POST) ){
            header("location:../../index.php");
        }
    }catch(PDOException $err){
        header('location: ../../editPage.php?error=something wrong');
    }

?>