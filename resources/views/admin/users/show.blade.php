@extends('admin.layouts.master')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
              <li class="breadcrumb-item active">{{ Str::limit($user->name, $limit = 15, $end = '...')}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3>Name: {{ $user->name }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <!-- /.mailbox-read-info -->
              <div class="mailbox-read-message">
                <p>Email: {{ $user->email }}</p>
                <p>Mobile: {{ $user->mobile }}</p>
                <p>Birthdate: {{ $user->birthdate }}</p>
                <p>Address: {{ $user->address }}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer -->
            <div class="card-footer">
              <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
              <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$user->id}}"><i class="fas fa-trash"></i></a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
