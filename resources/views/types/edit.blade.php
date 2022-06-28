@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">update Client</h1>
        </div><!-- /.col -->
        <div class="col-sm-9">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">update Client</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">update type</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('types.update',[ $type->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">name </label>
                    <input type="text" value="{{ $type->name}}" name="name" class="form-control" id="name">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
          

          </div>
        
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
@endsection

