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

</style>
@endsection



@section('content')


<div class="container">
    <div style="margin-top: 3%; margin-bottom: 1%; text-align: center; font-family: 'Times New Roman', Times, serif;">
        <h4><b> Biz barada </b></h4>
    </div>

    <div style="  text-align: justify;   text-indent: 50px;">

        {{-- {{ $about->description }} --}}
        {!! $about->description !!}

    </div>


</div>

</div >





@endsection



@section('js')
@endsection
