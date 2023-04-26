<?php
    include("konfigurasi.php");

    $s_db = "CREATE TABLE tbuser(
        id int auto_increment primary key,
        nama varchar(35),
        email varchar(255),
        username varchar(10),
        passkey varchar(255),
        iduser varchar(255)
    ); ";
    echo "SQL: " .$s_db."<br>";

    //koneksi ke DBMS Mysql

    $koneksi = Mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($koneksi){
        echo "koneksi ke DBMS mysql sukses<br>";
        $hsl = mysqli_query($koneksi, $s_db);
        if($hsl){
            echo "membuat table tbuser sukses<br>";
        }else{
            echo "membuat table tbuser  gagal<br>";
        }
    }else{
        echo "koneksi ke DBMS mysql gagal<br>";
    }


