@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create tasks</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create tasks</li>
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
                            <h3 class="card-title">create tasks</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ url('/tasks') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputname">task name </label>
                                    <input type="text" value="{{ $task->name}}" name="name" class="form-control" id="name"
                                        placeholder="Enter task name" >
                                </div>
                                <div class="form-group">
                                    <label for="category-name">details</label>
                                    <textarea type="textarea" name="details" class="form-control" id="details">
                                        {{$task->details}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <h4>completed</h4>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="completed" id="gridRadios1" value="1" @if($task->completed==1)checked @endif>
                                      <label class="form-check-label" for="gridRadios1">
                                        yes
                                      </label>
                                      <i class="fas fa-circle fa-2x text-green"></i>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="completed" id="gridRadios2" value="0" @if($task->completed==0)checked @endif>
                                      <label class="form-check-label" for="gridRadios2">
                                        no
                                      </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">completed_at</label>
                                    <input type="date-time" value="{{$task->completed_at}}" name="completed_at" class="form-control" id="completed_at" required>
                                </div>
                                <div class="form-group">
                                    <h4> approval</h4>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="approval" id="gridRadios1" value="1" @if($task->approval==1)checked @endif>
                                      <label class="form-check-label" for="gridRadios1">
                                        yes
                                      </label>
                                      <i class="fas fa-circle fa-2x text-green"></i>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="approval" id="gridRadios2" value="0"  @if($task->approval==0)checked @endif>
                                      <label class="form-check-label" for="gridRadios2">
                                        no
                                      </label>
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
