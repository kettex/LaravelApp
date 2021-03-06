@extends('layouts.master')
@section('content')


<div id="slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <div class="slider-caption">
                    <h1>Delicious Meals</h1>
                    <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                        <br><br>eget tellus luctus fermentum.</p>
                    {{--<a href="single-post.html">Shop Now</a>--}}
                </div>
                <img src="{{URL::asset('images/slide1.jpg')}}" alt="slidePicture1" />
            </li>
            <li>
                <div class="slider-caption">
                    <h1>Ice-cream Menus</h1>
                    <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam
                        <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                   {{-- <a href="single-post.html">More Details</a>--}}
                </div>
                <img src="{{URL::asset('images/slide2.jpg')}}" alt="" />
            </li>
            <li>
                <div class="slider-caption">
                    <h1>Healthy Drinks</h1>
                    <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet
                        <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                    {{--<a href="single-post.html">Get Ready</a>--}}
                </div>
                <img src="{{URL::asset('images/slide3.jpg')}}" alt="" />
            </li>
        </ul>
    </div>
</div>
  <div id="testimonails">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>References</h2>
                    <img src="{{URL::asset('images/under-heading.png')}}" alt="" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonails-slider">
                    <ul class="slides">
                        <li>
                            <div class="testimonails-content">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                <h6>Jennifer - <a href="#">Chief Designer</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="testimonails-content">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                <h6>Laureen - <a href="#">Marketing Executive</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="testimonails-content">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                <h6>Tanya - <a href="#">Creative Director</a></h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop