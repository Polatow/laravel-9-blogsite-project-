@extends('admin.layouts.app')
@section('title')
{{$post->title}}
@endsection

@section('css')

@endsection


@section('content')
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h4 class="ml-5"><a class="btn btn-sm btn-secondary" href="{{route('allpost.list')}}"><i class="fa fa-arrow-left mr-2"></i> Postlara Dolan</a> </h4>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div style="border: 1px solid grey" class="col-4 m-3 p-5">
                        <img src="{{asset('post_images')}}/{{$post->image}}" style="height: 300px;" class="card-img-top" alt="$post->title">
                    </div>
                    <div class="col-7">
                <div class="card-body">
                    <h4 style="border-left:  5px solid grey; padding-left:15px; font-size:25px;  "  class="mb-3">{{$post->title}}</h4>
                  <p class="card-text">{!!$post->description!!}</p>
                </div>
            </div>
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
