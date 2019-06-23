@extends('layouts.app')

@section('title', 'Create Payment')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit User
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li><a href="{{ route('user.index') }}">User</a></li>
    <li class="active">Edit Data</li>
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

        <form method="post" action="{{ route('user.update',$users->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="box-body">
            <div class="form-group">
              <label for="name">Poto Profil</label>
              <input type="file" name="photo" id="photo" value={{$users->photo}}>
            </div>
            <div class="form-group">
              <label for="name">Nama User</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama User" value="{{$users->name}}">
            </div>
            <div class="form-group">
              <label for="name">Email User</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="ex: admin@admin.com" value="{{$users->email}}">
            </div>
            <div class="form-group">
              <label for="name">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
              <input type="hidden" class="form-control" name="password2" id="password" value="{{$users->password}}">
            </div>
            <div class="form-group">
              <label for="name">Role</label>
              <select class="form-control" name="role">
                <option selected="selected" value="{{$users->role_id}}">-- {{$users->role->name}} --</option>
                @foreach ($roles as $role)
                  <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <a href="{{ route('user.index') }}" class="btn btn-default">Batal</a>
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
