<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo e(('font-awesome/css/all.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(('css/style.css')); ?>">

    <title>MAJOO TEKNOLOGI INDONESIA</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand"><strong>MAJOO TEKNOLOGI INDONESIA</strong></a>
        </div>
    </nav>

    <div class="container">
        <h4 class="text-center font-weight-bold m-4">Pembelian</h4>
        <div class="row">
            <div class="col-md-12">
            <form action="<?php echo e(route('index.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <label for="nama_pemesan" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
                </div>
                <div class="mb-3">
                  <label for="alamat_pemesan" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat_pemesan" name="alamat_pemesan">
                </div>
                <div class="mb-3">
                    <label for="telepon_pemesan" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="telepon_pemesan" name="telepon_pemesan">
                </div>
                <div class="mb-3">
                    <label for="produk_pemesan" class="form-label">Produk</label>
                    <input type="text" class="form-control" id="produk_pemesan" name="produk_pemesan" value="<?php echo e($produk->nama_produk); ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" readonly><?php echo e($produk->deskripsi_produk); ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo e($produk->harga_produk); ?>" readonly>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Konfimasi</button>
              </form>
              </div>
        </div>
    </div>
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>2019 @copyright  PT MAJOO TEKNOLOGI INDONESIA</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>


</html><?php /**PATH F:\TES_STUCK\new\pemesanan\resources\views/user/pesan.blade.php ENDPATH**/ ?>