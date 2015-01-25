@extends('layouts.master')
@section('content')

    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>About Us</h2>
                        <span>Home / <a href="{{URL::to('about/index')}}">About us</a></span>
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
                        <h2>Who We Are</h2>
                        <img src="{{URL::asset('images/under-heading.png')}}"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Company</h3>

                    <p>Duis efficitur, est ut sollicitudin efficitur, nulla eros tempus lacus, non auctor mi leo ut
                        justo. Proin euismod sapien nec risus bibendum aliquam. Quisque non maximus augue. Vivamus
                        mattis placerat faucibus. Fusce nec facilisis justo. Vestibulum tristique et purus condimentum
                        dignissim. Curabitur mollis, sem nec condimentum consequat, velit diam consequat ex, nec rhoncus
                        risus purus eget nibh. Sed a mollis dolor.</p>
                </div>
                <div class="col-md-6">
                    <h3>Team Management</h3>

                    <p>Nam id felis nec libero posuere pretium ut ut tortor. Maecenas molestie dolor sed lectus
                        vestibulum viverra. Morbi quis augue massa. Curabitur vel imperdiet justo, ut commodo sem. Donec
                        ac elementum dolor, at finibus ex. Curabitur viverra venenatis gravida. Proin augue libero,
                        accumsan sit amet ullamcorper in, posuere ac erat. Interdum et malesuada fames ac ante ipsum
                        primis in faucibus.</p>
                </div>
            </div>

        </div>
    </div>
@stop