<?php

    function view($file_name,$data=null){

        extract($data);

        require_once(__DIR__ . "/views/$file_name");
    }

    function back($error){
        header("Location: ".$_SERVER['HTTP_REFERER'].$error);
        exit;
    }

?>