<?php
if($_POST){
    /*$id_produk=$_POST['id_produk'];*/
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];
    if(empty($nama_petugas)){
        echo "<script>alert('Nama Tidak Boleh Kosong');location.href='tambah_petugas.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('Harap Isi Username');location.href='tambah_petugas.php';</script>";
        
    } elseif(empty($password)){
        echo "<script>alert('Harap Isi Password');location.href='tambah_petugas.php';</script>";
        
    } elseif(empty($level)){
        echo "<script>alert('Harap Isi Level');location.href='tambah_petugas.php';</script>";
        
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into petugas (nama_petugas,username,password,level) value ('".$nama_petugas."','".$username."','".md5($password)."','".$level."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_petugas.php';</script>";
        }
    }
}


?>
