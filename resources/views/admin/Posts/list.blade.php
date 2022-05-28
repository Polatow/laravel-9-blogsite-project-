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
            <h1 class="ml-5">"{{$posts->category_name}}" - Kategoriýasyna degişli ähli Postlar</h1>
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
                <div class="card-body">
                    <h5 style="float: right;" class="card-title">
                        <a href="{{route('posts.create', $posts->id)}}"  type="button" class="btn btn-outline-dark"><i class="fa fa-plus mr-2"></i>Create Post</a>
                    </h5>

                    <h5 class="card-title">
                      <form method="GET"  action="">
                          <div class="row">
                            <div class="col-12">
                              <div class="form-group">

                                <input type="text" placeholder="Gözleg..." value="{{request()->get('title')}}"  name="title" class="form-control">

                            </div>
                            </div>

                            {{-- @if(request()->get('title') || request()->get('status')) --}}
                            <div class="col-2">
                              {{-- <a href="{{route('quizzes.index')}}"  type="button" class="btn btn-outline-dark">Filteri arassala</a> --}}
                            </div>
                            {{-- @endif --}}
                          </div>
                      </form>

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
                            @foreach ($posts->posts as $post )

                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> {!! Str::limit($post->title,50) !!}</td>

                            <td>
                                @if($post->image)
                                <img src="{{asset('post_images')}}/{{$post->image}}" style="width: 50px;" alt="">
                                @else
                                    <span class="badge bg-secondary">No image</span>
                                @endif
                            </td>
                            <td> {!! Str::limit($post->description, 50)!!}</td>

                            <td  style="font-weight: bold;"> {{$post->category->category_name}}</td>
                            <td> {{$post->user->name}}</td>
                            <td >
                                <a class="btn btn-sm btn-secondary" href="{{route('posts.show', [$posts->id,$post->id])}}"><i class="fa fa-eye p-1"></i>View Post</a>

                                <a class="btn btn-sm btn-success" href="{{route('posts.edit', [$posts->id,$post->id])}}"><i class="fa fa-edit p-1"></i></a>

                                <div style="display: inline-block;">

                                {{-- post delete start  --}}

                                <form action="{{route('posts.destroy', [$posts->id,$post->id])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" value="{{$post->image}}" name="image">
                                    <button class="btn btn-sm btn-danger" ><i class="fa fa-trash p-1"></i></button>
                                </form>

                                {{-- Post delete end --}}
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
