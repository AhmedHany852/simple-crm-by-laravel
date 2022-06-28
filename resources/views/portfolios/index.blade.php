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
                      <h3 class="card-title">list of show</h3>
                    
                  </div>

                    <!-- /.card-header -->
                    <br> <br>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <div class="row ">I
                          
                                      @foreach($portfolios as $portfolio)
                                      <div class="card m-5" style="width:30rem;">
                                      <div class="card-body">
                                      <div class="card-title"> 
                                        <div class="card-header text-muted border-bottom-0">
                                         <h1>portfolio</h1>
                                        </div> 
                                      
                                       <img alt="user-avatar" class="img-circle img-fluid"  style=" width: 150px; " src="{{$portfolio->img}}">   
                                      
                                       <h3>id : {{$portfolio->id}}</h3>
                                       <br>
                                       <h3>Category:{{($portfolio->category)}}</h3>                                 
                                       <br>
                                       <h3>project Name : {{ $portfolio->projectName }}</h3>
                                        <br>
                                        <h3>created_at: {{$portfolio->created_at}}</h3>
                                        <br>                                   
                                      <form action="{{route('portfolios.destroy',[ $portfolio->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="spaces">
                                        <a  class="btn btn-primary" href="{{route('portfolios.edit',$portfolio->id) }}">Edit</a>  
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