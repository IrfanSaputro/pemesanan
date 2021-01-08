<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/admin.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('font-awesome/css/all.min.css')); ?>">

    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"><b>Admin Majoo</b></a>

        <form class="form-inline my-2 my-lg-0 ml-auto">
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>
        <div class="icon ml-4">
            <h5>
                <!-- <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Message"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i> -->
                <a href="<?php echo e(route('logout')); ?>"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Logout"></i></a>
            </h5>
        </div>
        </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?php echo e(route('dashboard.index')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('produk.index')); ?>"><i class="fas fa-box-open"></i> Produk</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(route('pemesan.index')); ?>"><i class="fas fa-clipboard-list"></i> Pemesan</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-9 p-5 pt-2">
            <h3 class="page-header">
                <i class="fas fa-box-open mr-2"></i> <b>TAMBAH BARANG</b>
            </h3>
            <hr>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Terjadi Kesalahan Input.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <form action="<?php echo e(route('produk.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                </div>
                <div class="form-group">
                    <label for="deskripsi_produk">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar_produk">Gambar</label>
                    <input type="file" class="form-control" id="gambar_produk" name="gambar_produk">
                </div>
                <div class="form-group">
                    <label for="harga_produk">Harga</label>
                    <input type="number" class="form-control" id="harga_produk" name="harga_produk">
                </div>
                <div class="form-group">
                    <button type="submit" name="simpan" class="btn btn-primary"> Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(url('js/admin.js')); ?>" type="text/javascript"></script>
</body>
</html>
<?php /**PATH F:\TES_STUCK\new\pemesanan\resources\views/admin/tambah_produk.blade.php ENDPATH**/ ?>