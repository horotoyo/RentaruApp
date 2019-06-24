@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
  </h1>
  <ol class="breadcrumb">
    <li class="active"><a href=><i class="fa fa-dashboard"></i> Beranda</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <a href=""><span class="info-box-icon bg-red"><i class="fa fa-tags"></i></span></a>

        <div class="info-box-content">
          <span class="info-box-text">Kategori</span>
          <span class="info-box-number"> <small>Kategori Tersedia</small></span>
          <a href="" class="btn btn-danger btn-xs">Detail</a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <a href=""><span class="info-box-icon bg-aqua"><i class="fa fa-camera"></i></span></a>

        <div class="info-box-content">
          <span class="info-box-text">Barang</span>
          <span class="info-box-number"> <small>Barang Tersedia</small></span>
          <a href="" class="btn btn-info btn-xs">Detail</a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <a href=""><span class="info-box-icon bg-green"><i class="glyphicon glyphicon-transfer"></i></span></a>

        <div class="info-box-content">
          <span class="info-box-text">Peminjaman</span>
          <span class="info-box-number"> <small>Peminjaman Hari ini </small></span>
          <a href="" class="btn btn-success btn-xs">Detail</a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <a href=""><span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span></a>

        <div class="info-box-content">
          <span class="info-box-text">Member</span>
          <span class="info-box-number"> <small>Member</small></span>
          <a href="" class="btn btn-warning btn-xs">Detail</a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
@endsection