@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Items</h1>
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
                <h3 class="card-title">Item's Information</h3>
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
                      <label>Item Name</label>
                      <input type="text" class="form-control" placeholder="Enter item's name" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Item ID</label>
                          <input type="text" class="form-control" placeholder="Enter item's ID" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Quantity</label>
                          <input type="number" class="form-control" placeholder="Enter item's quantity" required>
                        </div>
                        <div class="col-5">
                          <label>Entry Date</label>
                          <input type="date" class="form-control" placeholder="DD/MM/YY" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Minimum Level</label>
                          <input type="number" class="form-control" placeholder="Enter min level" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Price per Item</label>
                          <input type="number" class="form-control" placeholder="Enter item's price" required>
                        </div>
                        <div class="col-5">
                          <label>Total Value</label>
                          <input type="number" class="form-control" disabled>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <h6> QR LABELS/BARCODES </h6>
                      <button type="button" class="btn btn-block btn-outline-warning btn-lg">Scan QR/Barcodes</button>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-6">
                    <h6> ITEM IMAGE </h6>
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