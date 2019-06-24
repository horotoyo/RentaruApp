@extends('layouts.app')

@section('title', 'Barang')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Barang
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li class="active">Barang</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
        </div>
      @endif
      <div class="box box-primary">
        <div class="box-header with-border">
          <a href="{{ route('product.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Tipe Barang</th>
              <th>Merek</th>
              <th>Status</th>
              <th>Kondisi</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php
              $nomor = 1;
            @endphp
            @foreach ($products as $product)
            <tr>
              <td width="20px">{{ $nomor++ }}</td>
              <td>{{ $product->type_products->name }}</td>
              <td>{{ $product->merk }}</td>
              <td>{{ $product->status }}</td>
              <td>{{ $product->condition }}</td>
              <td>
                <form method="post" action="{{ route('product.destroy', $product->id) }}">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary btn-xs">Edit</a>
                  <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-baru">Detail</button>
                  <button type="submit" class="btn btn-danger btn-xs" onclick='javascript:return confirm("Apakah anda yakin ingin menghapus data ini?")'>Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  @include('admin.product.detail')
</section>
<!-- /.content -->
@endsection
