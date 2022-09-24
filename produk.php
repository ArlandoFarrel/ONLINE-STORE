<?php 
    include "header.php";
?>
<h2>Daftar Buku</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from produk");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="assets/foto_produk/<?=$dt_buku['foto']?>" class="card-img-top">
              <div class="card-body"><?=$dt_buku['nama_produk']?>
                <h5 class="card-title"></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
                <a href="beli.php?id_produk=<?=$dt_buku['id_produk']?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>
