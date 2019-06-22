@extends('layouts.app')

@section('title', 'Create Payment')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit Kategori Produk
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li><a href="{{ route('type.index') }}">Kategori</a></li>
    <li class="active">Edit Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <a href="{{ route('type.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        </div>

        <form method="post" action="{{ route('type.update',$types->id) }}">
          @csrf
          @method('PUT')
          <div class="box-body">
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Kategori" value='{{$types->name}}'>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a href="{{ route('type.index') }}" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-primary">Edit</button>
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
