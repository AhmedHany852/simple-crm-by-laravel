@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                  <div class="card-header">
                      <h3 class="card-title">list of clients</h3>
                      <a class=" d-flex justify-content-end " href="{{ route('logout-user') }}">logout</a>
                  </div>

                    <!-- /.card-header -->
                    <br> <br>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <div class="row ">I
                          
                                      @foreach($clients as $client)
                                      <div class="card m-5 " style="width:30rem;">
                                      <div class="card-body">
                                      <div class="card-title"> 
                                        <div class="card-header text-muted border-bottom-0">
                                         <h1>client</h1>
                                        </div> 
                                      
                                       <img alt="user-avatar" class="img-circle img-fluid"  style=" width: 150px " src="{{$client->fileInput}}">   
                                      
                                       <h3>id : {{$client->id}}</h3>
                                       <br>
                                       <h3>name:{{($client->name)}}</h3>
                                       <br>
                                       <h3>type: {{ (isset($client->Typename->name))? $client->Typename->name : 'No Type' }}</h3>
                                       <br>
                                       <h3>business Category : {{$client->businessCategory}}</h3>
                                       <br>
                                       <h3>birthDate : {{ $client->birthDate }}</h3>
                                        <br>
                                        <h3> phone: {{$client->phone}}</h3>
                                        <br>
                                        <h3> address: {{ $client->address }}</h3>
                                        <br>
                                       <h3>city: {{$client->city}}</h3>
                                        <br>
                                        <h3> notes: {{$client->notes}}</h3>
                                        <br>
                                        <h3>created_at: {{$client->created_at}}</h3>
                                        <br>                                   
                                      <form action="{{route('clients.destroy',[ $client->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="spaces">
                                        <a  class="btn btn-primary" href="{{route('clients.edit',$client->id) }}">Edit</a>  
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input  type="submit" class="btn btn-danger" value="Delete"/>
                                        <br>
                                        <br>
                                       </form>
                                     </div>
                                  </div>
                                </div>
                              </div>
                        @endforeach
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