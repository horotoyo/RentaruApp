@extends('layouts.app')

@section('title', 'Create Payment')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah User
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li><a href="{{ route('user.index') }}">User</a></li>
    <li class="active">Tambah Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <a href="{{ route('user.index') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        </div>

        <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="name">Poto Profil</label>
              <input type="file" name="photo" id="photo">
            </div>
            <div class="form-group">
              <label for="name">Nama User</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama User">
            </div>
            <div class="form-group">
              <label for="name">Email User</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="ex: admin@admin.com">
            </div>
            <div class="form-group">
              <label for="name">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
            </div>
            <div class="form-group">
              <label for="name">Role</label>
              <select class="form-control" name="role">
                <option value="">-- Pilih Role --</option>
                @foreach ($roles as $role)
                  <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a href="{{ route('user.index') }}" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
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
