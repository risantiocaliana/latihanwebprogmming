<?php
if(isset($_GET["pg"])){
    $pr = $_GET["pg"];
}
$pr = "p1";
$konten = "";
$judulpage = "";
switch ($pr){
    case "p1";
        $judulpage = "halaman 1";
       $konten ="<h3>Halaman p1</h3>";
        $konten .="<p>menampilkan halaman p1</p>";
        break;
     case "p2";
     $judulpage = "halaman 2";
        $konten ="<h3>Halaman p2</h3>";
       $konten .="<p>menampilkan halaman p2</p>"; 
        break;
     case "p3";
     $judulpage = "halaman 3";
     $konten ="<h3>Halaman p3</h3>";
     $konten .="<p>menampilkan halaman p3</p>"; 
    default;
    $konten ="<h3>Halaman p1</h3>";
    $konten .="<p>menampilkan halaman p1</p>";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$judulpage;?></title>
</head>
<body>

    <a href="latihan01.php?pg=1">halaman1</a> <a href="latihan02.php?pg=2">halaman2</a> <a href="latihan03.php?pg=3">halaman3</a>
    <?php 
     echo $konten;
    ?>

</body>
</html>