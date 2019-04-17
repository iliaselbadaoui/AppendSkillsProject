<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta id="insertionRef">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <script src="../vendor/vue.min.js"></script>
    <script src="../js/modules/include.js"></script>
    <script src="../js/pages_pkgs.js"></script>
    <link rel="stylesheet" href="../css/nuStyle.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <h1 id="title">Accueil</h1>
    <div class="renderer" id="renderer">
        <fa-card ident="Users" fa_class="fas fa-users" message="Utilisateurs"></fa-card>
        <fa-card ident="Money" fa_class="fas fa-dollar-sign" message="Revenus"></fa-card>
        <fa-card ident="Course" fa_class="fas fa-graduation-cap" message="Formations"></fa-card>
        <fa-card ident="Statistics" fa_class="fas fa-chart-pie" message="Statistiques"></fa-card>
        <fa-card ident="Enterprise" fa_class="fas fa-building" message="Entreprises"></fa-card>
        <fa-card ident="Manage" fa_class="fas fa-tasks" message="Gérer les admins"></fa-card>
    </div>
</div>
<meta id="endRef">
</body>
</html>