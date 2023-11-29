<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pujasera</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Data Barang</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Create Data Barang</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('simpanBarang')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" id="KodeBarang" name="KodeBarang" class="form-control" placeholder="Kode Barang">
                            </div>
                            <div class="form-group">
                                <input type="text" id="NamaBarang" name="NamaBarang" class="form-control" placeholder="Nama Barang">
                            </div>
                            <div class="form-group">
                                <input type="text" id="Satuan" name="Satuan" class="form-control" placeholder="Satuan">
                            </div>
                            <div class="form-group">
                                <input type="text" id="HargaSatuan" name="HargaSatuan" class="form-control" placeholder="HargaSatuan">
                            </div>
                            <div class="form-group">
                                <input type="text" id="Stok" name="Stok" class="form-control" placeholder="Stok">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('Template.script')
</body>

</html>