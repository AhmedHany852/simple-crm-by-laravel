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
                      <h3 class="card-title">list of tasks</h3>
                  </div>


                    <!-- /.card-header -->
                    <br> <br>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <div class="row ">I
                        @foreach($tasks as $task)
                       
                            
                               
                                  
                                  
                                      <div class="card m-5 " style="width: 30rem">
                                      <div class="card-body" style="background-color: dodgerblue" >
                                      <div class="card-title"> 
                                       <h1>MY TASKS</h1> 
                                       <h3>id : {{$task->id}}</h3>
                                       <br>
                                       
                                       <h3>name: {{$task->name}}</h3>
                                       <br>
                                       
                                       <p class="form-control" style="width: 25rem ">details: {{ $task->details }}</p>
                                       <br>
                                       
                                       <h3>completed: @if ($task->completed==1)yes
                                        @else
                                        no
                                        @endif</h3>
                                        <br>
                                        
                                        <h3>completed at: {{$task->completed_at}}</h3>
                                        <br>
                                        
                                        <h3>approval: @if ($task->approval==1)yes
                                         @else
                                         no
                                         @endif</h3>
                                        <br>
                                        
                                        <h3>created at: {{$task->created_at}}</h3>

                                      
                                      <form action="{{route('tasks.destroy',[ $task->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="spaces">
                                        <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>  
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-danger" value="Delete"/>
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