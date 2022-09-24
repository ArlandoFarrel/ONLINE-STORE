<?php
include "headeroperator.php";
?>
<?php 
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $id = $_SESSION['id_pelanggan'];
?>
<h2>Histori</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th>
        <th>Nama</th>
        <th>Tanggal Transaksi</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total Harga</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $sql=mysqli_query($conn,"select  p.*, t.*, d.*  from produk p join
        transaksi t on p.id_produk = t.id_produk join detail_transaksi d on t.id_transaksi = d.id_transaksi");
        $no=0;
        while($histori=mysqli_fetch_array($sql)){
            $no++;
            $hapus="<td><a href='hapushistoripetugas.php?id_transaksi=$histori[id_transaksi]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='btn btn-danger'>Hapus Histori</a></td>";
            $qry_histori=mysqli_query($conn,"select P.nama from  pelanggan P  join transaksi T on T.id_pelanggan=P.id_pelanggan where T.id_transaksi = '".$histori['id_transaksi']."'");
            while($dt_histori=mysqli_fetch_array($qry_histori)){
                $buku=$dt_histori['nama'];
            }
        ?>
        <tr>
                        <td><?=$no?></td>
                        <td><?=$buku['nama']?></td>
                        <td><?=$histori['tgl_transaksi']?></td>
                        <td><?=$histori['nama_produk']?></td>
                        <td><?=$histori['qty']?></td>
                        <td><?=$histori['harga']?></td>
                        <td><?=$histori['subtotal'].$hapus?></td>
                    </tr>
                    <?php
}   
            ?>


