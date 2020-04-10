@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="row">
                    <!-- left column -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <h6> DEFAULT INFORMATION </h6>
                      <label>Category</label>
                      <input type="text" class="form-control" placeholder="Enter category" required>
                    </div>
                    <div class="form-group">
                        <label>Notes</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    </div>
                  <br>
                  <div class="col-md-6">
                    <h6> CATEGORY IMAGE </h6>
                      <div class="input-group mb-3 px-2 py-2 round bg-white shadow-sm">
                        <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0" accept="image/*">
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                        <div class="input-group-append">
                          <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                        </div>
                      </div>
                      <!-- Uploaded image area-->
                      <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                  </div>

                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-success float-right">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
