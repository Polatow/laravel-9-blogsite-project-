@extends('admin.layouts.app')
@section('title')
Contact
@endsection

@section('css')

@endsection


@section('content')
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="ml-5">Contact</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                 </div>
            @endif
        <div class="card ">

            <div class="row">
                <div class="col-12">
                  <div style="border-top: 5px solid #007bff; "  class="card m-4">
                    <div class="card-header">
                      <h3 class="card-title">
                      </h3>

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
                      <table class="table table-hover text-nowrap table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Works</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($datalar as $data )
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td > {!! Str::limit($data->description, 170)!!}</td>
                            <td >
                                <a class="btn btn-sm btn-secondary" href="{{route('about.show',$data->id)}}"><i class="fa fa-eye p-1"></i></a>
                                <a class="btn btn-sm btn-success" href="{{route('about.edit',$data->id)}}"><i class="fa fa-edit p-1"></i></a>
                            </td>
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
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@section('js')

@endsection
