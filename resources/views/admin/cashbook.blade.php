@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">

           <h1 class="m-0 text-dark">Cash book</h1>

         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item active">Home</li>
             <li class="breadcrumb-item"><a href="#">Cash book</a></li>
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
            <thead style="text-align:center;">
                <tr>
                    <th>Income</th>
                    <th>Outcome</th>
                    <th>Transaction Date</th>
                </tr>
            </thead>
            <tbody style="text-align:center;">
                <tr>
                        <td>Rp200000</td>
                        <td>Rp100000</td>
                        <td>7 Maret 2020</td>
                </tr>
                </tbody>

            <tbody style="text-align:center;">
                <tr>
                        <td>Rp100000</td>
                        <td>Rp10000</td>
                        <td>8 Maret 2020</td>
                </tr>
                </tbody>
        </table>
        </div>
    </div>
   <!-- /.content -->
@endsection
