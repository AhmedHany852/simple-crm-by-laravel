@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">list of types</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">list of types</li>
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
   <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">type of  Client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
               <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      
      
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          
                        </thead>
                        <tbody>
                            @foreach($types as $type)
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td> <form action="{{route('types.destroy',[ $type->id])}}" method="POST">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <div class="spaces">
                                  <a class="btn btn-primary" href="{{ route('types.update',$type->id) }}">Edit</a>  
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <input type="submit" class="btn btn-danger" value="Delete"/>
                                  
                                 </form>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>



              </form>
            </div>
        </div> 
      </div>
    </div>
  </div>
  
@endsection