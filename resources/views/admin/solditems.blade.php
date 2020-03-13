@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sold Items</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active"><a href="#">Sold Items</a></li>
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
                      <label>Item ID</label>
                      <input type="text" class="form-control" placeholder="Enter item's ID" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Item Name</label>
                          <input type="text" class="form-control" placeholder="Enter item's name" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Price per item (Rp)</label>
                          <input type="integer" class="form-control" placeholder="Enter price per item" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Quantity</label>
                          <input type="number" class="form-control" placeholder="Enter item's quantity" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Sub Total (Rp)</label>
                          <input type="integer" class="form-control" placeholder="Enter subtotal" required>
                        </div>
                        <div class="col-5">
                          <label>Total (Rp)</label>
                          <input type="integer" class="form-control" placeholder="Enter total sales" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-5">
                          <label>Name</label>
                          <input type="number" class="form-control" placeholder="Enter name" required>
                        </div>
                      </div>
                    </div>
                    <br>
                  </div>
                  <br>
                  <div class="form-group" style="text-align:center;">
                      <h6> QR LABELS/BARCODES </h6>
                      <button type="button" class="btn btn-block btn-outline-warning btn-lg">Scan QR/Barcodes</button>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" align="center">
                     <button type="submit" class="btn btn-success">Tambah</button>
                  </div>
                </div>
                </div>
              </form>
        
        <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Tabel Items</h3>
        </div>
        <div class="table-responsive" style="margin-left:20px;">
        <table class="table table-striped table-bordered table-hover" style="margin-right:100px;">
            <thead style="text-align:center;">
                <tr>
                    <th>ID Items</th>
                    <th>Items</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Sub-Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody style="text-align:center;">
                <tr>
                        <td>110011542</td>
                        <td>Beng-Beng</td>
                        <td>8</td>
                        <td>Rp2000</td>
                        <td>Rp2000</td>
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                </tbody>

            <tbody style="text-align:center;">
                <tr>
                        <td>210231519</td>
                        <td>Oreo</td>
                        <td>15</td>
                        <td>Rp2000</td>
                        <td>Rp2000</td>
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                </tr>
                </tbody>
        </table>
        </div>
    </div>
                <!-- /.card-body -->
                <div class="card-footer" align="center">
                <button type="submit" class="btn btn-success">Finish</button>
                </div>
              </form>
            </div>
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