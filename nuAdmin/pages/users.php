<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta id="insertionRef">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <script src="../vendor/vue.js"></script>
    <script src="../js/modules/include.js"></script>
    <script src="../js/pages_pkgs.js"></script>
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
            <h1 id="title">La list des utilisateurs</h1>
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
                    <th>Type</th>
                    <th>Désactiver</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Youssef Basfaou</td>
                    <td>Simple</td>
                    <td><nuswitch css="switch"></nuswitch></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Anas Hilali</td>
                    <td>Simple</td>
                    <td><nuswitch css="switch"></nuswitch></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Samia Hachimi</td>
                    <td>Formateur</td>
                    <td><nuswitch css="switch"></nuswitch></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Hassnae Wadii</td>
                    <td>Simple</td>
                    <td><nuswitch css="switch"></nuswitch></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Ayoub Elhasnaoui</td>
                    <td>Simple</td>
                    <td><nuswitch css="switch"></nuswitch></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Nassira Radi</td>
                    <td>Formateur</td>
                    <td><nuswitch css="switch"></nuswitch></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="renderer">
            <h1 id="title">Les nouveaux utilisateurs</h1>
            <canvas id="usersGrowth"></canvas>
        </div>
    </div>
    <meta id="endRef">
    <script src="../vendor/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <script src="../js/charts/usersChart.js"></script>
</body>
</html>