@extends('admin.layouts.app')
@section('title')
Categories
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
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                 </div>
            @endif
            <div class="row">
                <div class="col-12">
                  <div style="border-top: 5px solid #007bff; " class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                          <a class="btn btn-md btn-primary" href="{{route('category.create')}}"><i class="fa fa-plus mr-3"></i>Create Category</a>
                      </h3>

                      <div  class="card-tools ">

                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Degişli Postlar</th>
                            <th>Works</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )


                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> {{$category->category_name}}</td>
                            <td>{{$category->posts_count}}</td>
                            <td >
                                <a class="btn btn-md btn-secondary" href="{{route('posts.index', $category->id)}}"><i class="fa fa-eye p-1"></i>Degişli Postlary gör</a>

                                <a class="btn btn-md btn-success" href="{{route('category.edit',$category->id)}}"><i class="fa fa-edit p-1"></i></a>

                                <div style="display: inline-block;">

                                <form action="{{route('category.destroy', $category->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-md btn-danger" ><i class="fa fa-trash p-1"></i></button>
                                </form>

                            </div>

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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection


@section('js')

@endsection
