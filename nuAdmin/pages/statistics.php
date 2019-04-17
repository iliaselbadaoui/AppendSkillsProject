<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta id="insertionRef">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="../css/nuStyle.css"/>
    <style type="text/css">
        .renderer{
            flex-direction: column !important;
        }
    </style>
</head>
<body>
<h1 id="title">Utilisateur selon les SE</h1>
<div class="renderer">
    <canvas id="UsersOsShares"></canvas>
</div>
<h1 id="title">Utilisateur selon les navigateur</h1>
<div class="renderer">
    <canvas id="UsersnavShares"></canvas>
</div>
<script src="../js/charts/usersShares.js"></script>
</body>
</html>