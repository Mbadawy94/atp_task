@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper" style="min-height: 1342.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Create User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="name">
                                            Name
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               id="name"
                                               name="name"
                                               placeholder="Enter Name"
                                               value="{{ old('name') }}"
                                               required
                                               >
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               name="email"
                                               placeholder="Enter Email"
                                               value="{{ old('email') }}"
                                               required
                                               >
                                    </div>
                                    <div class="form-group">
                                        <label for="password">
                                            Password
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               name="password"
                                               placeholder="Enter Password"
                                               value="{{ old('password') }}"
                                               required
                                               >
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">
                                            Mobile
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               name="mobile"
                                               placeholder="Enter Mobile"
                                               value="{{ old('mobile') }}"
                                               required
                                               >
                                    </div>

                                    <div class="form-group">
                                        <label for="birthdate">
                                            Birthdate
                                        </label>
                                        <div class='input-group date' id='datetimepicker'>
                                        <input type='date' class="form-control"
                                               name="birthdate"
                                               placeholder="Enter Birthdate"
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label for="address">
                                            Address
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               name="address"
                                               placeholder="Enter Address"
                                               value="{{ old('address') }}"
                                               required
                                               >
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
