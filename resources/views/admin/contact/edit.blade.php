@extends('admin.layouts.app')
@section('title')

@endsection

@section('css')

@endsection


@section('content')
<div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="ml-5">Categories</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

          
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div style="border-top: 5px solid #007bff; " class="card">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('contact.update', $update->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone Number</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="phone_number" value="{{$update->phone_number}}" placeholder="Enter Phone Number...">
                    </div>
                   
                    <div class="form-group">
                        <label for="mail">Email Address</label>
                        <input type="email" class="form-control" id="mail" name="email" value="{{$update->email}}" placeholder="Enter email address...">
                    </div>

                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$update->address}}" placeholder="Enter Address...">
                    </div>

                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ýatda Sakla</button>
                  </div>
                </form>
              </div>

        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection


@section('js')

@endsection
