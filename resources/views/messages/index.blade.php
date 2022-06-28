@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">list of message</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">list of message</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- 

<div class="row gx-4 gx-lg-5 justify-content-center mb-5">
    <div class="col-lg-6">
        
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
      
            
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <div class="row ">I
                  </div>
             <div>             
            @foreach($massages as $message)
            <div class="card m-5 " style="width:30rem;">
             <!-- Name -->
            <div class="form-floating mb-3">
                
                <label class="form-control" for="name">name:{{ $message->name }}</label>
            </div>
            <!-- Email address -->
            <div class="form-floating mb-3">
               
                <label class="form-control" for="email">Email addressphone: {{ $message->email }}</label>              
            </div>
            <!-- Phone number -->
            <div class="form-floating mb-3">
               
                <label class="form-control" for="phone">phone: {{ $message->phone }}</label>
               
            </div>
            <!-- Message -->
            <div class="form-floating mb-3">
                
                <label class="form-control" for="message">message: {{ $message->Message }}</label>
            </div>
           
            <form action="{{route('Messages.destroy',[ $message->id])}}" method="get">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="spaces">  
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <input  type="submit" class="btn btn-danger"  value="Delete"/>
            
              </div>
          
          </div>
          </div>
          </form>
        </div>
        @endforeach
                
            </div>
            @endsection 
            
            
