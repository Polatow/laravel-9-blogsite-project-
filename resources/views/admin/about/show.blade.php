@extends('admin.layouts.app')
@section('title')
About Show
@endsection

@section('css')

@endsection


@section('content')
@extends('admin.layouts.app')
@section('title')
Dashboard
@endsection

@section('css')

@endsection


@section('content')
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="ml-5"> <a class="btn btn-sm btn-secondary" href="{{route('about.index')}}"><i class="fa fa-arrow-left mr-2"></i> Yza Dolan</a></h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

           <div class="container">
               <div  style="  text-align: justify;   text-indent: 50px;">
                    <p>
                        {!! $show->description !!}
                    </p>
               </div>
               <p>
                <a class="btn btn-sm btn-success" href="{{route('about.edit',$show->id)}}"><i class="fa fa-edit p-1"></i> Edit</a>

               </p>
            </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection


@section('js')

@endsection


@section('js')
@endsection
