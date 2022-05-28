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
            <h1 class="ml-5">Admin Dashboard</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container">
         <div class="row">

            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <h3>
                      {{$category->count()}}
                  </h3>

                  <p>All category</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('category.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3>
                        {{$post->count()}}
                    </h3>

                    <p>All Posts</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="{{route('allpost.list')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

          </div>
          <!-- /.row -->

        </div>
{{-- -------------------------------------------- --}}

{{-- yokardaky ikisinin yagny all post we all catgory end --}}





    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection


@section('js')

@endsection
