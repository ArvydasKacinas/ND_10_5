<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 uzduotis</title>
</head>
<body>
    <form method="POST" action="5_uzduotis.php">
        <input name="spalva"/>
        <button name="keisti">Keisti</button>
    </form>
    <?php

    $juoda="juoda";
    $raudona="raudona";
    $melyna="melyna";

    if($juoda==$_POST["spalva"]) {
        echo "<body style='background-color:black'>";
    } else if($raudona==$_POST["spalva"]) {
        echo "<body style='background-color:red'>";
    } else if($melyna==$_POST["spalva"]) {
        echo "<body style='background-color:blue'>";
    } else {
        echo "Ivesti tik juoda/raudona/melyna";
    }
    
    ?>
</body>
</html>