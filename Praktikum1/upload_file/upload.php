<?php
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file = $_FILES['fupload']['name'];
    $deskripsi = $_POST['deskripsi'];
    $direktori="c:/xampp/htdocs/PWD/Praktikum1/upload_file/$nama_file";
    if(move_uploaded_file ($lokasi_file, $direktori))
    {
        echo"Nama file : <b>$nama_file</b> Berhasil di upload<br>";
        echo"Deskripsi File :<br>$deskripsi";
    }else{
        echo"File Gagal diupload";
    }