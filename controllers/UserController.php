<?php
include_once "../root.php";
include_once root."/services/UserServices.php";
include_once root."/services/RoleServices.php";
include_once root."/services/SessionServices.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    $US = new UserServices();
    $RS = new RoleServices();
    $SS = new SessionServices();
    if($op=="login"&&$type=="admin"){
        $user = $US->FindByEmail($email);
        if ($user!=null){
            if(md5($user->motpasse)==md5($passe)){
                $role = json_decode($RS->FindById($user->role));
                if ($role->code=="admin"){
                    $_SESSION["user"]=$user;
                    //Create user session in data base;
                    $session=new Session(0,"","",$nav,$os,$user->id);
                    $SS->Start($session);

                    echo json_encode($user);
                }else{
                    echo "-2";
                }
            }else{
                echo "-1";
            }
        }else{
            echo "0";
        }
    }else if($op=='logout'){
        //$usr = $_SESSION["user"];
        $SS->End(1);
        session_destroy();
        session_abort();
    }else if($op=="updatePasse"){
        $user = $_SESSION["user"];
        $US->UpdatePasse($user->id,$passe);
        echo "Mot de passe changer avec succés";
    }

}
