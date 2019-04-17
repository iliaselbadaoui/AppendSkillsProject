<?php
include_once "../root.php";
include_once root."/services/RoleServices.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    $RS = new RoleServices();
    if($op=="id"){
        echo $RS->FindById($id);
    }else if($op=="all"){
        echo $RS->Read();
    }
}