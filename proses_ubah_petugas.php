<?php
if($_POST){
    $id_petugas=$_POST['id_petugas'];
    $nama=$_POST['nama_petugas'];
    $level=$_POST['level'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='ubah_petugas.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='ubah_petugas.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update petugas set nama_petugas='".$nama."', username='".$username."', level='".$level."' where id_petugas = '".$id_petugas."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update petugas set nama_petugas='".$nama."', username='".$username."', password='".md5($password)."', id_petugas='".$id_petugas."' where id_petugas = '".$id_petugas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        }
        
    } 
}
?>
