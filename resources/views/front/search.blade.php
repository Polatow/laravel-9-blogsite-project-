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
        margin-top: 3%;
        margin-bottom: 1%;

    }

    .post_title h3 {
        margin-left: 3%;
        font-family: rockwell;
        display: inline-block;
    }
    .post_title a {
        margin-right: 5%;
        font-family: rockwell;
        display: inline-block;
        float: right;
        margin-top: 2px;
    }

</style>
@endsection



@section('content')


<div class="container">
    <div class="post_title"  >
        <h3><b> Gözleg Netijeleri </b></h3>
        <a  href="{{route('front.news')}}" class="btn btn-secondary"> Gozlegi ayyr</a>
    </div>

        <div class="container">
            <div class="row">
                @forelse ($result as $post)
                <div class="col-md-4 mt-2 mb-2 ">
                    <a href="{{route('front.news_single', $post->slug )}}" style="text-decoration: none; color: black; font-family: rockwell; font-size: 18px;">
                        <div class="card h-100 ">
                            <img src="{{asset('post_images')}}/{{$post->image}}" class="card-img-top " alt="Los Angeles Skyscrapers " />
                            <div class="card-body ">
                                <h5 class="card-title  "><b>{{$post->title}}</b></h5>
                                {{-- <p class="card-text "> {!! Str::limit($post->description, 20)!!}</p>    --}}
                            </div>
                            <div class="card-footer ">
                                <small class="text-muted ">{{ $post->created_at->format('d-m-Y')}}.ý</small>
                            </div>
                        </div>

                    </a>
                </div>
                @empty
                <p style="font-size: 25px;">Bagyşlaň!!! Gözleg Netijesi tapylmady!!!</p>
            @endforelse

            </div>
        </div>


</div>

</div >





@endsection



@section('js')
@endsection
