@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">

           <h1 class="m-0 text-dark">Sales</h1>
           <div>
           <img src="{{ asset('arraw_drop.svg') }}" class="panah" alt="">
           <h5 class="m-0 text-dark" class="relatife">Weekly</h5>
           </div>

         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item active">Home</li>
             <li class="breadcrumb-item"><a href="#">Sales</a></li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="card" style="padding-right:40px;">
        <div class ="print" style="text-align:right;">
            <div class ="btn btn-info"><img src="{{ asset('print.png') }}">PRINT</div>
        </div>
        <div class="table-responsive" style="margin-left:20px;">
        <table class="table table-striped table-bordered table-hover" style="margin-right:100px;">
            <thead>
                <tr>
                    <th>Transaction Date</th>
                    <th>ID Items</th>
                    <th>Items</th>
                    <th>Total Items</th>
                    <th>Price</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                        <td>7 Maret 2020</td>
                        <td>110011542</td>
                        <td>Beng-Beng</td>
                        <td>8</td>
                        <td>Rp2000</td>
                        <td>Rp16000</td>
                </tr>
                </tbody>

            <tbody>
                <tr>
                        <td>7 Maret 2020</td>
                        <td>210231519</td>
                        <td>Oreo</td>
                        <td>15</td>
                        <td>Rp2000</td>
                        <td>Rp30000</td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                        <td>6 Maret 2020</td>
                        <td>210231519</td>
                        <td>Oreo</td>
                        <td>10</td>
                        <td>Rp2000</td>
                        <td>Rp20000</td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                        <td>5 Maret 2020</td>
                        <td>110011542</td>
                        <td>Beng-Beng</td>
                        <td>5</td>
                        <td>Rp2000</td>
                        <td>Rp10000</td>
                </tr>
        </table>
     </div>
   </div>

   <!-- /.content -->
@endsection
