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
<h1 id="title">Les 10 formations les plus achetées</h1>
<div class="renderer">
    <table id="top">
        <thead>
            <tr>
                <th>Position</th>
                <th>Nom</th>
                <th>Domaine</th>
                <th>Nombre d'achats</th>
                <th>Le formateur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Arduino pour les nulls</td>
                <td>Electronique</td>
                <td>17090</td>
                <td>Jhony Ive</td>
            </tr>
            <tr>
                <td>2</td>
                <td>ReactNative full guide</td>
                <td>Programation</td>
                <td>16989</td>
                <td>Mark Zuckerburg</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Illustrator from Zero to Zoro</td>
                <td>Design</td>
                <td>16811</td>
                <td>Steve Jobs</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ionic framework</td>
                <td>Programmation</td>
                <td>16120</td>
                <td>Alex Hope</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Amazon FBA</td>
                <td>Marketing</td>
                <td>15764</td>
                <td>Garry vee</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Google AdSense</td>
                <td>Marketing</td>
                <td>14890</td>
                <td>Sundar Pichai</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Photoshop full course</td>
                <td>Design</td>
                <td>14033</td>
                <td>Moussaab Waziz</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Deep learning</td>
                <td>Progammation</td>
                <td>13658</td>
                <td>Sofia Marfy</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Unreal engine</td>
                <td>Conception des jeux vidéo</td>
                <td>13005</td>
                <td>Cloe Amanda</td>
            </tr>
            <tr>
                <td>10</td>
                <td>AutoDesk Maya</td>
                <td>Graphisme</td>
                <td>12800</td>
                <td>Lara Croft</td>
            </tr>
        </tbody>
    </table>
</div>
<h1 id="title">Les ventes des formations</h1>
<div class="renderer">
    <canvas id="CoursesGrowth"></canvas>
</div>
<script src="../js/charts/coursesChart.js"></script>
</body>
</html>