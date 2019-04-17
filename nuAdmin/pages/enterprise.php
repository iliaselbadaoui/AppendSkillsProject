<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta id="insertionRef">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script src="../vendor/vue.js"></script>
    <script src="../js/modules/include.js"></script>
    <script src="../js/pages_pkgs.js"></script>
    <script src="../vendor/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/nuStyle.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style type="text/css">
        #app{
            display: block !important;
        }
        .renderer{
            margin: auto !important;
            flex-direction: column !important;
        }
    </style>
</head>
<body>

<div id="app">
    <div class="renderer">
        <h1 id="title">La list des entreprises</h1>
        <div>
            <select class="selection">
                <option value="0">Choisissez une état</option>
                <option value="1">Active</option>
                <option value="2">Non-Active</option>
            </select>
        </div>
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Désactiver</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Menara Holding</td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maroc Telecome</td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Aqua Holding</td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Menara Holding</td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>5</td>
                <td>ONA Holding</td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>6</td>
                <td>OCP</td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="renderer">
        <h1 id="title">Les nouvelles entreprise</h1>
        <canvas id="enterGrowth"></canvas>
    </div>
</div>
<meta id="endRef">
<script src="../js/charts/entrepriseChart.js"></script>
</body>
</html>