@extends('layouts.master')
@section('content')

    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Error</h2>
                        <span>Home / <a href="{{URL::to('error')}}">Error</a></span>
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
                        <h2>An unexpected error occured!</h2>
                        <img src="{{URL::asset('images/under-heading.png')}}"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Please try again later</h3>
                    <p>If this error consists, please feel free to <a href="{{URL::to('contact/index')}}">contact us</a>! </p>
                </div>
            </div>
        </div>
    </div>
@stop