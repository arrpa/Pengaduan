<?php

    $koneksi = mysqli_connect('localhost','root','','dbpengaduan');

    if(!$koneksi) {
        echo"Koneksi Anda Gagal";
    }
