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
        color: rgb(225, 230, 228);
        font-weight: bold;
        letter-spacing: 7px;
    }
    .actives {
        background-color: #0a4275;
        color: white;
        font-size: 20px;
    }

</style>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"> --}}

@endsection



@section('content')
<div class="news-image">
    <img src="assets/image/news.jpg" alt="Snow" style="width:100%;  height: 300px;">
    <div class="centered">Habarlar</div>

</div>



<div class="comtainer ">

    <div class="container mt-5 ">
        <div class="row ">
            <div class="col-md-8">
                <div class="row">
            @foreach ($posts as $post )

            <div class="col-md-6 mt-2 mb-2 ">
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
        </div>
        {{ $posts->links() }}
    </div>


            <div class="col-md-4">
                <div class="list-group">
                    <button class="list-group-item actives">Kategoriýalar</button>
                    <a href="{{route('front.news')}}" class="list-group-item ">Ähli Habarlar</a>

                    @foreach ($categories as $category)
                    <a href="{{route('front.news', ['category'=>$category->category_name])}}" class="list-group-item">{{$category->category_name}}</a>
                    @endforeach
                </div>
            </div>
        </div>



                {{-- <ul class="pagination pagination-circle pagination-md ">
                    <li class="page-item">
                        <a class="page-link ">Öňki</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Indiki</a>
                    </li>
                </ul> --}}





    </div>
</div>



@endsection



@section('js')
@endsection
