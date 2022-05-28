@extends('admin.layouts.app')
@section('title')
Create Post
@endsection

@section('css')

@endsection


@section('content')
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="ml-5"> "{{$category->category_name}}" - kategoriýasyna degişli Post goş</h1>
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

            <div style="border-top: 5px solid #007bff; " class="card ">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('posts.store', $category->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Enter Title...">
                    </div>
                    <div class="form-group">
                        <label for="catgory"> Post Category</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{$category->category_name}}" disabled>

                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
                      </div>

                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" >{{old('description')}}</textarea>
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
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection
