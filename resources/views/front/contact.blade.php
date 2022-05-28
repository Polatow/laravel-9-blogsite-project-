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


    .title {
        text-align: center;
        font-size: 30px;
        margin: 2%;
        font-weight: bold;
        /* text-decoration: underline; */
        font-family: 'Times New Roman', Times, serif;
    }

    .box {
            border: 1px solid rgb(194, 191, 191);
            box-shadow: 0 10px 5px -5px rgba(30, 129, 204, 0.2);
        }

        span {
            font-weight: bold;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

</style>
@endsection



@section('content')

<div class="container">
    <div style="margin-top: 3%; margin-bottom: 1%; text-align: center; font-family: 'Times New Roman', Times, serif;">
        <h4><b> Biziň bilen Habarlaşmak üçin!!! </b></h4>
    </div>


    <div class="row">


        <div class="col-md-8 mt-3">
            <form action="#" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input  name="name" value="{{old('name')}}" class="form-control" type="text" placeholder="Name...">
                            @error('name')
                                <p style="color: red; margin:5px;">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input name="email"  value="{{old('email')}}" class="form-control" type="email" placeholder="Email...">
                            @error('email')
                                <p style="color: red;    margin:5px;">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 m-1">
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input name="subject"  value="{{old('subject')}}" class="form-control" type="text  " placeholder="Subject...">
                            @error('subject')
                                <p style="color: red; margin:5px;">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 m-1">
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea name="message"  value="{{old('message')}}" id="" class="form-control" placeholder="Some text..." cols="30" rows="6"></textarea>
                            @error('message')
                                <p style="color: red; margin:5px;">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 m-1">
                        <div class="form-group">
                            <input style="background-color: #0a4275; width: 20%; float: right; " type="submit" value="Send" class="btn text-white">

                        </div>
                    </div>

            </form>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d100659.84833971321!2d58.464053099999994!3d37.962651799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1646396042049!5m2!1sru!2s" width="600" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </div>


    <div class="container mt-5">
        <div style="padding: 20px;" class="box ">
            <div class="row">
                <div class="col-md-4">
                    <img style="margin-left: 5%; padding: 2px;" <img src="https://img.icons8.com/ios-filled/50/000000/phone.png" />
                    <span style=" padding: 1px;">Phone Number: {{$contact->phone_number}}</span>
                </div>

                <div class="col-md-4">
                    <img style="margin-left: 5%; padding: 2px;" src="https://img.icons8.com/material/50/000000/mail.png" />
                    <span style=" padding: 1px;">Email: {{$contact->email}}</span>
                </div>

                <div class="col-md-4">
                    <img style="margin-left: 5%; padding: 2px;" <img src="https://img.icons8.com/ios-filled/50/000000/address--v1.png" />
                    <span style=" padding: 1px;"> Address:{{$contact->address}}</span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



@section('js')
@endsection
