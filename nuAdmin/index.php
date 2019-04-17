<?php
session_start();
$user = "";
if(isset($_SESSION["user"])){
    $user=$_SESSION["user"];
    header("Location:./admin.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AppendSkills Admin</title>
    <link crossorigin="anonymous" rel="stylesheet" href="./css/nuStyle.css"/>
    <script src="./js/modules/builder.js"></script>
    <link rel="shortcut icon" href="./assets/favico.png" type="image/x-icon">
    <style type="text/css">
        body{
            height: 100%;
            width: 100%;
            background-color: #eeeeee;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h2{
            color: #22104b;
            font-family: 'Rubik', sans-serif;
            text-align: center;
            display: block;
        }
    </style>
    <script src="./API/sessionWatcher.js" type="text/javascript"></script>
</head>
<body>
    <div class="loginContainer">
        <h2>Login</h2>
        <div>
            <input type="text" placeholder="Email" class="input" id="loginId" />
        </div>
        <div>
            <input type="password" placeholder="Mot de passe" class="input" id="loginPass" />
        </div>
        <button class="Positive_BTN hc-item" id="loginBtn">Connecter</button>
    </div>
    <h2 class="err_msg" id="err"></h2>
    <script src="./vendor/jquery.min.js" type="application/javascript"></script>
    <script type="text/javascript" src="./API/login.js"></script>
    <script src="./js/activities/login.js"></script>
</body>
</html>
<?php
}
?>