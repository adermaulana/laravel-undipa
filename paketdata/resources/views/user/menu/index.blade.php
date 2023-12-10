@extends('admin.layouts.main')

@section('container')

    <!--content-->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/user">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
         <div class="container-fluid">
           <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Pilih Katogori</h3>
              </div>
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-4">
                        <select class="form-control" name="id_kategori" required>
                            <option value="" disabled selected >Pilih Kategori</option>
                              <option value=""></option>
                        </select>
                    </div>
                    <div class="col-2">
                        <button type="submit" name="set" class="btn btn-success">Set</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
           </div>

      <div class="container">
        <h5 class="mb-2">
            Nama Kategori
        </h5>
        <div class="row">

          <div class="col-md-6 col-sm-6 col-12">
            <a href="#" onclick="onPilih('')" class="text-dark">
            <div class="info-box">
              <span class="info-box-icon" style="width: 100px;height: 100px">
                <img style="width: 100px;height: 100px;object-fit:contain" src="foto/" alt="k">
              </span>

              <div class="info-box-content">
                <span class="info-box-text">deskripsi</span>
                <span class="info-box-text">paekt</span>
                <span class="info-box-number">harga</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
            <!-- /.info-box -->
          </div>

        </div>
        <!-- /.row -->
      </div>
      </div>
    <!-- /.content -->

@endsection