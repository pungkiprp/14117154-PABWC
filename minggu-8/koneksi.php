<?php
    $host = mysql_connect("localhost:3307","root","");

    if($host){
        echo"koneksi host berhasil<br/>";
    }else{
        echo "koneksi gagal<br/>";
    }
$db = msql_select_db("universitas");
if($db){
    echo "koneksi database berhasil";
}else{
    echo "koneksi database gagal";
}
?>