<?php
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM produk
WHERE 
nama_barang LIKE '%$keyword%'

";
$produk = query($query);


?>



<?php if ($produk) : ?>
    <div class="row">
        <?php foreach ($produk as $prdk) : ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="img/<?= $prdk['gambar']; ?>" class="card-img-top" alt="#" data-aos="fade-right" data-aos-duration="1000" width="233" />
                    <div class="card-body">
                        <h5 data-aos="fade-right" data-aos-duration="3000"><?= $prdk['nama_barang']; ?></h5>
                        <p>$<?= $prdk['harga']; ?></p>
                        <p class="card-text" data-aos="fade-right" data-aos-duration="3000">
                            <?= $prdk['deskripsi']; ?>
                        </p>
                        <button type="submit" class="btn btn-secondary">Buy Now</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>