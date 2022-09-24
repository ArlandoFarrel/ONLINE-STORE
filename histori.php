<?php 
    include "header.php";
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $id = $_SESSION['id_pelanggan'];
?>
<h2>Histori</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Tanggal Transaksi</th><th>Nama Produk</th><th>Jumlah</th><th>Harga</th><th>Total Harga</th><th>Aksi</th>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $qry_histori=mysqli_query($conn,"select p.nama_produk, t.tgl_transaksi, p.harga, d.qty, d.subtotal, t.id_transaksi  from produk p join
        transaksi t on p.id_produk = t.id_produk join detail_transaksi d on t.id_transaksi = d.id_transaksi where t.id_pelanggan='$id'");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            $hapus="<td><a href='hapushistori.php?id_transaksi=$dt_histori[id_transaksi]' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='btn btn-danger'>Hapus Histori</a></td>";
        ?>
        <tr>
                        <td><?=$no?></td>
                        <td><?=$dt_histori['tgl_transaksi']?></td>
                        <td><?=$dt_histori['nama_produk']?></td>
                        <td><?=$dt_histori['qty']?></td>
                        <td><?=$dt_histori['harga']?></td>
                        <td><?=$dt_histori['subtotal'].$hapus?></td>
                    </tr>
                    <?php
}
            ?>


