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
    <h1 id="title">Gestion</h1>
    <div class="renderer">
        <button class="Positive_BTN">Ajouter</button>
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Supprimer</th>
                <th>Désactiver</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Elbadaoui Ilias</td>
                <td>Super Admin</td>
                <td><button class="Negative_BTN">Supprimer</button></td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Waziz Moussab</td>
                <td>Super Admin</td>
                <td><button class="Negative_BTN">Supprimer</button></td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Akram Bouazaofne</td>
                <td>Admin niveau 2</td>
                <td><button class="Negative_BTN">Supprimer</button></td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ali Idaoud</td>
                <td>Admin niveau 2</td>
                <td><button class="Negative_BTN">Supprimer</button></td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Laqsir Chouaib</td>
                <td>Admin Contact</td>
                <td><button class="Negative_BTN">Supprimer</button></td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Nassira Radi</td>
                <td>Admin Contact</td>
                <td><button class="Negative_BTN">Supprimer</button></td>
                <td><nuswitch css="switch"></nuswitch></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<meta id="endRef">
</body>
</html>