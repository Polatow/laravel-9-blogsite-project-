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

    .image-ocleg {
        height: 700px !important;
    }

    .title {
        text-align: center;
        font-size: 30px;
        margin: 2%;
        font-weight: bold;
        /* text-decoration: underline; */
        font-family: 'Times New Roman', Times, serif;
    }


    .news-image {
        position: relative;
        text-align: center;
        color: white;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 50px;
        color: rgb(248, 248, 248);
        font-weight: bold;
        letter-spacing: 7px;
        background-color: #0a4275;
        opacity: 0.8;

    }
</style>
@endsection



@section('content')

<div class="news-image">
    <img src="{{asset('assets/image/TurkmenAirport.jpg')}}" alt="Snow" style="width:100%;  height: 700px;">
    <div class="centered">Türkmen News Türkmen Habarlar Portaly</div>

</div>


<div class="container ">
    <div class="title ">
        Täze Habarlar
    </div>
    <div class="container ">
        <div class="row ">
        @foreach ($posts as $post )

        <div class="col-md-4 mt-2 mb-2 ">
            <a href="{{route('front.news_single', $post->slug )}}" style="text-decoration: none; color: black; font-family: rockwell; font-size: 18px;">
                <div class="card h-100 ">
                    <img src="{{asset('post_images')}}/{{$post->image}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                    <div class="card-body ">

                        <h5 class="card-title  "><b>{{$post->title}}</b></h5>
                        {{-- <p class="card-text "> {!! Str::limit($post->description, 20)!!}</p>    --}}
                    </div>
                    <div class="card-footer ">
                        <small class="text-muted">{{ $post->category->category_name}}</small>
                        <small  style="float: right; " class="text-muted mt-1 ">{{ $post->created_at->format('d-m-Y')}}.ý</small>


                    </div>
                </div>

            </a>
        </div>

        @endforeach



            <div class="title ">
                <a style="background-color: #0a4275; " class="btn text-white" href="{{route('front.news')}}">Ähli Habarlar</a>
            </div>

        </div>


    </div>
</div>

@endsection



@section('js')
@endsection
