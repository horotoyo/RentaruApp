@extends('layouts.app')

@section('title', 'Create Payment')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit Jenis Pembayaran
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li><a href="{{ route('payment.index') }}">Jenis Pembayaran</a></li>
    <li class="active">Edit Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <a href="{{ route('payment.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        </div>

        <form method="post" action="{{ route('payment.update', $payment->id) }}">
          @csrf
          @method('PUT')
          <div class="box-body">
            <div class="form-group">
              <label for="name">Nama Payment</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Payment Name" value="{{ $payment->name }}">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a href="{{ route('payment.index') }}" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection