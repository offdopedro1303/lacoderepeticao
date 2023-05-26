<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 
    if (isset($_GET["number"])) {
        $tabuada = $_GET["number"];
        $count = 1;
        
        echo "<h2>Tabuada do $tabuada</h2>";
        echo "<ul>";
        while ($count <= 10) {
            $resultado = $tabuada * $count;
            echo "<li>$tabuada x $count = $resultado</li>";
            $count++;
        }
        echo "</ul>";
    }
    ?>
</body>
</html>