{{-- @extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">list of Client</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">list of Client</li>
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
                <h3 class="card-title">list of  Client</h3>
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
                          <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>type name</th>
                            <th>business Category</th>
                            <th>birthDate</th>
                            <th>phone</th>
                            <th>address</th>
                            <th>city</th>
                            <th>notes</th>
                            <th>fileInput</th>
                            <th>created at</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                             
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ (isset($client->Typename->name))? $client->Typename->name : 'No Type' }}</td>
                                <td>{{ $client->businessCategory }}</td>
                                <td>{{ $client->birthDate }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->address }}</td>
                                <td>{{ $client->city }}</td>
                                <td>{{ $client->notes }}</td>
                                <td><img class="img-fluid" style="" src="{{$client->fileInput}}"> </td>
                                <td>{{ $client->created_at }}</td>
                                <td> 
                                  <form method="POST" action="{{ url('/clients/' . $client->id ) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                            
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                                        <a class="btn btn-primary" href="{{ route('clients.update',$client->id) }}">Edit</a>
                                    </div>
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
  
@endsection --}}