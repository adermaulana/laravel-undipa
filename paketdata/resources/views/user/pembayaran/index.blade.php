@extends('admin.layouts.main')

@section('container')

<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Transaksi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="example2">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Nama Kategori</th>
                                    <th>Paket</th>
                                    <th>Harga Paket</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>tanggal</td>
                                        <td>nama</td>
                                        <td>paket</td>
                                        <td> Rp.</td>
                                        <td>status</td>
                                        <td>

                                                <button type="button" data-toggle="modal" data-target="#bayar"
                                                        data-nama="nama"
                                                        data-paket="paket"
                                                        data-harga="harga"
                                                        data-id="id"
                                                        data-user="user"
                                                        class="btn btn-info"><i class="fa fa-print"></i> Bayar
                                                </button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>


    <div class="modal fade" id="bayar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Pembayaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="user" name="user">
                    <div class="modal-body">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Pembayaran</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Kategori</label>
                                    <input type="text" class="form-control" id="nama" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Paket</label>
                                    <input type="text" class="form-control" id="paket" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga Paket</label>
                                    <input type="text" class="form-control" id="harga" readonly>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Bank BRI</label>
                                    <input type="text" class="form-control" value="AN.Maqbul" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Rekening</label>
                                    <input type="text" class="form-control" value="21357213571" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Bukti Transfer</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                   name="bukti" required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" name="kirim" class="btn btn-info">Kirim Pembayaran</button>
                    </div>
            </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection