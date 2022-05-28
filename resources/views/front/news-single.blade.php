@extends('front.layouts.app')


@section('title')
TÜRKMEN NEWS
@endsection



@section('css')
<style>
    * {
        font-family: 'Times New Roman', Times, serif;
    }

    ul li a {
        font-size: 18px;
    }

    .post_title {
        background-color: rgba(205, 217, 228, 0.89);
        padding: 2px;
    }

    .post_title h3 {
        margin-left: 3%;
        font-family: rockwell;
    }

    .actives {
        background-color: #0a4275;
        color: white;
        font-size: 20px;
    }
</style>

@endsection



@section('content')




<div class="comtainer  mb-5 ">


    <div class="container">

        <div class="row ">

            <div class="col-md-7 ">
                <div class="post_title mt-3 mb-3 ">

                    <h3>{{$post->title}}</h3>

                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <img  src="{{asset('post_images')}}/{{$post->image}}" style="width: 100%; border-radius: 10px;;" alt="">
                    </div>
                    <div class="col-md-12">
                        <ul style="margin-left:2%; " class="list-group list-group-horizontal  mt-2 mb-2 ">
                            {{-- <li style="border: none;" class="list-group-item"> <b>Writing By:</b> {{$post->user->name}} </li> --}}
                            <li style="border: none;" class="list-group-item"> <b>Date:</b> {{ $post->created_at->format('d-m-Y')}}.ý</li>
                        </ul>
                        <div style="font-size: 18px;  text-align: justify; text-indent: 30px;" class="col-md-12">
                            {!!      $post->description!!}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-5 mt-3">
                <div class="row">
                    {{-- <div class="col-md-12">
                        <div class="list-group">
                            <a href="#" class="list-group-item actives">Kategoriýalar</a>
                            @foreach ($categories as $category)
                            <a href="#" class="list-group-item">{{$category->category_name}}</a>
                            @endforeach
                        </div>
                    </div> --}}

                    <div class="col-md-12 mt-3">
                        <h4 style="margin-left: 2%; font-size: 26px;" class=""><b> Beýleki Habarlar </b></h4>

                        <div class="list-group">

                            @foreach ($beylekiler as  $beyleki)
                            <a href="{{route('front.news_single', $beyleki->slug)}}" class="list-group-item">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <img style=" height: 100%;" src="{{asset('post_images')}}/{{$beyleki->image}}" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$beyleki->title}}</h5>

                                                <p class="card-text"><small class="text-muted">{{$beyleki->created_at->format('d-m-Y')}}.ý</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach






                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




@endsection



@section('js')
@endsection
