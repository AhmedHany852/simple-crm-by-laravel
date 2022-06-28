@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create Client</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Client</li>
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
                <h3 class="card-title">create Client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ url('/clients') }}"  enctype="multipart/form-data">
                @csrf
                <div class="card-body" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">name </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="category-name">type Name</label>
                    <select name="type_id" id=""  class="form-control" >
                        @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                  <div class="form-group">
                    <label for="exampleInputPassword1">business category</label>
                    <input type="text" name="businessCategory" class="form-control" id="businessCategory" placeholder="Enter businessCategory">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">birth date</label>
                    <input type="date" name="birthDate" class="form-control" id="birthDate" placeholder=" Enter birthDate">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">phone </label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">address</label>
                    <input type="text" name="address"  class="form-control" id="address" placeholder="Enter address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">city </label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter city">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">notes </label>
                    <input type="notes" name="notes" class="form-control" id="notes" placeholder="Enter notes">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="fileInput"  class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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

