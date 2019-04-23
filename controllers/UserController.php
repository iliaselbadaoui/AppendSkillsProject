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
        $SS->End($_SESSION["user"]->id);
        session_destroy();
        session_abort();
    }else if($op=="updatePasse"){
        $user = $_SESSION["user"];
        $US->UpdatePasse($user->id,$passe);
        echo "Mot de passe changer avec succés";
    }else if($op=="updateUser"){
        $u = $_SESSION["user"];
        $user = new User($u->id,$nom,$prenom,"","",$adress,$ville,$pays,$tel,"","","",$naissance);
        $US->ShortUpdate($user);
    }elseif ($op="simpleuserlogin"){
        $user = $US->FindByEmail($email);
        if ($user!=null){
            if(md5($user->motpasse)==md5($passe)){
                session_start();
                $_SESSION["user"]=$user;
                setcookie("username",md5($email),time()+(86400*365),"/");
                setcookie("userpass",md5($passe),time()+(86400*365),"/");
                header('Content-type: application/json');
                header("location:../appendSkills/intro.php");
            }else{
                header("location:../appendSkills/login.php?e=mdp");
            }
        }else{
            header("location:../appendSkills/login.php?e=email");
        }
    }elseif ($op=='addSimpleUser'){
        //$US->Create(new User(0,null,null,$email,$passe,,null,null,null,11,'no-photo.png',null,null));
    }

}
