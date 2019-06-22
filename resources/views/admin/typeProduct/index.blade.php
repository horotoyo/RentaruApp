@extends('layouts.app')

@section('title', 'Type Product')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Kategori
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li class="active">Kategori</li>
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
          <a href="{{ route('type.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Kategori Produk</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php
              $nomor = 1;
            @endphp
            @foreach ($types as $type)
            <tr>
              <td width="20px">{{ $nomor++ }}</td>
              <td>{{ $type->name }}</td>
              <td>
                <form method="post" action="{{ route('type.destroy', $type->id) }}">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('type.edit', $type->id) }}" class="btn btn-primary btn-xs">Edit</a>
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
</section>
<!-- /.content -->
@endsection
