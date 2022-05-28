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
            <h1 class="ml-5">All Posts</h1>
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
                  <div style="border-top: 5px solid #007bff; " class="card ">
                    <div class="card-body">
                    <div class="mb-5">
                        <h5 style="float: right" class="card-title  ">
                          <a href="{{route('posts.create',$category->id)}}" type="button" class="btn btn-outline-dark"><i class="fa fa-plus mr-2"></i>Create Post</a>
                      </h5>
                      <h5 class="card-title  ">
                        <a href="{{route('category.index')}}" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left mr-2"></i>Exit Categories</a>
                    </h5>
                </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title </th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Category Name</th>
                            <th>Writing by</th>
                            <th>Works</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($category->posts as $post )

                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> {{$post->title}}</td>
                            <td><img src="{{asset('/image')}}/{{$post->image}}" style="width: 50px;" alt=""> </td>
                            <td> {{ Str::limit($post->description, 50)}}</td>

                            <td> {{$post->category->category_name}}</td>
                            <td> {{$post->user->name}}</td>
                            <td >
                                <a class="btn btn-sm btn-secondary" href=""><i class="fa fa-eye p-1"></i>View Post</a>

                                <a class="btn btn-sm btn-success" href=""><i class="fa fa-edit p-1"></i></a>

                                <div style="display: inline-block;">

                                <form action="{{route('posts.destroy', $post->id)}}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" ><i class="fa fa-trash p-1"></i></button>
                                </form>

                            </div>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                      {{-- {{ $posts->links() }} --}}
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
