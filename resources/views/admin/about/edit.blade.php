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
            {{-- <h1 class="ml-5"> "{{$post->title}}" - Edit Post</h1> --}}
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
                <form action="{{route('about.update',$edit->id)}}" method="POST" >
                  @csrf
                  @method('PUT')
                  <div class="card-body">

                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" >{{$edit->description}}</textarea>
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
