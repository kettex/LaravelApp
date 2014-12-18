@extends('layouts.master')
@section('content')
    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Contact Us</h2>
                        <span>Home / <a href="{{URL::to('contact/index')}}">Contact Us</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="product-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2>Feel free to send a message</h2>
                        <img src="images/under-heading.png" alt="">
                    </div>
                </div>
            </div>
            <div id="contact-us">
                <div class="container">
                    <div class="row">
                        <div class="product-item col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="message-form">
                                        <form action="#" method="post" class="send-message">
                                            <div class="row">
                                                <div class="name col-md-4">
                                                    <input type="text" name="name" id="name" placeholder="Name"/>
                                                </div>
                                                <div class="email col-md-4">
                                                    <input type="text" name="email" id="email" placeholder="Email"/>
                                                </div>
                                                <div class="subject col-md-4">
                                                    <input type="text" name="subject" id="subject"
                                                           placeholder="Subject"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="text col-md-12">
                                                    <textarea name="text" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="send">
                                                <button type="submit">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="info">
                                        <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in
                                            pulvinar
                                            velit massa id elit. </p>
                                        <ul>
                                            <li><i class="fa fa-phone"></i>0463 - 123456</li>
                                            <li><i class="fa fa-globe"></i>Universität Klagenfurt, 9020 Klagenfurt</li>
                                            <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2>Find Us On Map</h2>
                        <img src="images/under-heading.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="googleMap" style="height:420px;"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false">
    </script>

    <script>

        var map;

        function initialize() {
            var map_options = {
                center: new google.maps.LatLng(46.615074, 14.262524),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), map_options);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
    </script>
@stop