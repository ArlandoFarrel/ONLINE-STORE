<?php
if($_POST){
    /*$id_produk=$_POST['id_produk'];*/
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    if(empty($nama)){
        echo "<script>alert('Nama Tidak Boleh Kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('Harap Isi Username');location.href='tambah_pelanggan.php';</script>";
        
    } elseif(empty($telp)){
        echo "<script>alert('Harap Isi No Telp');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Harap Isi Password');location.href='tambah_pelanggan.php;</script>";
    }  elseif(empty($alamat)){
        echo "<script>alert('Harap Isi Alamat');location.href='tambah_pelanggan.php;</script>";
    
        
   
        
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama,username,password,alamat,telp) value ('".$nama."','".$username."','".md5($password)."','".$alamat."','".$telp."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Pelanggan');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_pelanggan.php';</script>";
        }
    }

}

?>
