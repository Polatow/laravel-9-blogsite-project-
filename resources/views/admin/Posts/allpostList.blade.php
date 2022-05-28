@extends('admin.layouts.app')
@section('title')
All Posts
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

                  <div style="border-top: 5px solid #007bff; " class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title </th>
                            <th>Image</th>
                            {{-- <th>Description</th> --}}
                            <th>Category Name</th>
                            <th>Writing by</th>
                            <th>Works</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($lists as $list)

                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>  {!! Str::limit($list->title, 70)!!}</td>

                            <td>
                                @if($list->image)
                                <img src="{{asset('post_images')}}/{{$list->image}}" style="width: 50px;" alt="">
                                @else
                                    <span class="badge bg-secondary">No image</span>
                                @endif
                            </td>
                            {{-- <td> {!! Str::limit($list->description, 50)!!}</td> --}}

                            <td  style="font-weight: bold;"> {{$list->category->category_name}}</td>
                            <td> {{$list->user->name}}</td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="{{route('single.post', $list->slug)}}"><i class="fa fa-eye p-1"></i>View Post</a>

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
