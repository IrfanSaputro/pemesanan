<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('font-awesome/css/all.min.css')}}">

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
                <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Logout"></i></a>
            </h5>
        </div>
        </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="{{ route('dashboard.index') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('produk.index') }}"><i class="fas fa-box-open"></i> Produk</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('pemesan.index') }}"><i class="fas fa-clipboard-list"></i> Pemesan</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3 class="page-header">
                <i class="fas fa-box-open mr-2"></i> <b>DAFTAR PEMESAN</b>
            </h3>
            <hr>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    @foreach($pemesan as $pemesan)
                    <?php $no++; ?>
                    <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $pemesan->nama_pemesan }}</td>
                        <td>{{ $pemesan->alamat_pemesan }}</td>
                        <td>{{ $pemesan->telepon_pemesan }}</td>
                        <td>{{ $pemesan->produk_pemesan }}</td>
                        <td>{{ $pemesan->deskripsi }}</td>
                        <td>{{ $pemesan->harga }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

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
    <script src="{{url('js/admin.js')}}" type="text/javascript"></script>
</body>
</html>
