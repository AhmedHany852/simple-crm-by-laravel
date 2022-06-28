@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create portfolio</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create portfolio</li>
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
                <h3 class="card-title">Create portfolios</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ url('/portfolios') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">category </label>
                    <input type="text" name="category" class="form-control" id="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">project Name</label>
                    <input type="text" name="projectName" class="form-control" id="businessCategory" placeholder="Enter businessCategory">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">img</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img"  class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
              </form>
            </div>
            
          

          </div>
        
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
@endsection

