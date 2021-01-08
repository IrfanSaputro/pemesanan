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
        <h4 class="text-center font-weight-bold m-4">Produk</h4>
        <div class="row">
            <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 13rem;" id="card-img">
                <img src="<?php echo e(url('img/'.$produk->gambar_produk)); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($produk->nama_produk); ?></h5><br>
                    <h4><b><?php echo e($produk->harga_produk); ?></b></h4><br>
                    <p><?php echo e($produk->deskripsi_produk); ?></p><br>
                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('index.show',$produk->id_produk)); ?>">Beli</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


</html><?php /**PATH F:\TES_STUCK\new\pemesanan\resources\views/user/index.blade.php ENDPATH**/ ?>