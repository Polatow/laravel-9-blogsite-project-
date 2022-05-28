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
            <h1 class="ml-5"> "{{$post->title}}" - Edit Post</h1>
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
                <form action="{{route('posts.update',[$post->category_id, $post->id])}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" placeholder="Enter Title...">
                    </div>
                    <div class="form-group">
                        <label for="catgory"> Post Category</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{$post->category->category_name}}" disabled>

                    </div>
                        @if($post->image)
                    <div class="form-group">
                        <label for="image">Postyň öňki bar bolan suraty :</label>
                        <img style="height: 200px" src="{{asset('post_images')}}/{{$post->image}}" alt="">
                    </div>
                    @else{
                        Bu postda degisli on surat yok
                    }
                    @endif
                    <div class="form-group">
                        <label for="image">Suraty tazele</label>
                        <input type="file" class="form-control" id="image" name="image" >
                      </div>
                      <input type="hidden" value="{{$post->image}}" name="old_image">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" >{{$post->description}}</textarea>
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
