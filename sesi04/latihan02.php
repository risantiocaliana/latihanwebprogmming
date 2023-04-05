<?php
    $usr = "";
    $ps ="";
    $eusr ="";
    $eps ="";

    if(isset ($_POST["txUSER"])){
    $usr = $_POST["txUSER"];
    $ps = $_POST["txpass"];

        if( $usr == ""){
            $eusr = "<div style='color: red;font-size: 9px; '> user name masih kosong";
        }
        if( $ps == ""){
            $ps = "<div style='color: red;font-size: 9px; '> password  masih kosong";
        }

    
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form menggunakan methode POST</title>
</head>
<body>
    <form method="POST" action="latihan02.php">
        <div>
            user name
            <input type="text" name="txUSER">
            <?=$eusr;?>

        </div>
         
        <div>
            password
            <input type="password" name="txpass">
            <?=$ps;?>

        </div>

        </div>
        <div>
            <button type="submit"> login </button>

        </div>
    </form>

    <div>
        <pre>
            USER NAME: <?=$usr?>
            PASSWORD: <?=$ps?>
        </pre>
    </div>
</body>
</html>