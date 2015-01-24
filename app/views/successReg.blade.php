@extends('layouts.master')
@section('content')

    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Activation completed</h2>
                        <span>Home / <a href="{{URL::to('succesfulRegistration')}}">Account activated</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="timeline-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                                                <img src="{{URL::asset('images/under-heading.png')}}"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>You have successfully activated your account!</h3>
                    <p>Now you are able to <a href="{{URL::to('login')}}">login</a> and order some menus!</p>
                </div>
            </div>
        </div>
    </div>
@stop