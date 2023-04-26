<?php
    include("konfigurasi.php");

    $s_db = "CREATE DATABASE " .DBNAME;
    echo "SQL: " .$s_db."<br>";

    //koneksi ke DBMS Mysql

    $koneksi = Mysqli_connect(DBHOST, DBUSER, DBPASS);
    if($koneksi){
        echo "koneksi ke DBMS mysql sukses<br>";
        $hsl = mysqli_query($koneksi, $s_db);
        if($hsl){
            echo "membuat database ".DBNAME, " sukses<br>";
        }else{
            echo "membuat database ".DBNAME, " gagal<br>";
        }
    }else{
        echo "koneksi ke DBMS mysql gagal<br>";
    }


