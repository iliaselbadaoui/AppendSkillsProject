<?php
error_reporting(1);
session_start();
$user = "";
if(!isset($_SESSION["user"])){
    header("Location:./index.php");
}else{
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Allow" content="application/javascript">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta id="insertionRef">
    <script src="vendor/vue.min.js"></script>
    <script src="js/modules/include.js"></script>
    <script src="js/pkgs.js"></script>
    <link rel="shortcut icon" href="assets/favico.png" type="image/x-icon">
    <link rel="stylesheet" href="css/nuStyle.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>AppendSkills: Admin dashboard</title>
</head>
<body>
<div id="app">
    <nav-drawer></nav-drawer>
    <action-bar></action-bar>
    <fragment from="pages/home.php"></fragment>
</div>
<meta id="endRef">
</body>
</html>
<?php
}
?>