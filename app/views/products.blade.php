@extends('layouts.master')
@section('content')

    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Our Products</h2>
                        <span>Home / <a href="{{URL::to('products/index')}}">Products</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div id="products-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="product-heading">
                        <h2>Hungry ?</h2>
                        <img src="{{URL::asset('images/under-heading.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="filters col-md-12 col-xs-12">
                    <ul id="filters" class="clearfix">
                        <li><span class="filter" data-filter="all">All</span></li>
                        <li><span class="filter" data-filter=".ginger">Ginger</span></li>
                        <li><span class="filter" data-filter=".pizza">Pizza</span></li>
                        <li><span class="filter" data-filter=".pasta">Pasta</span></li>
                        <li><span class="filter" data-filter=".drink">Drink</span></li>
                        <li><span class="filter" data-filter=".hamburger">Hamburger</span></li>
                    </ul>
                </div>
            </div>
            <div class="row" id="Container">
                <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product1.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product1_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}" alt=""/></a>
                                    <span>Pizza</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Vege Pizza</a></h3>
                            <span class="text-category">$16.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item ginger">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product2.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product2_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Ginger</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Ginger Tea</a></h3>
                            <span class="text-category">$24.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item pizza">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product3.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product3_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Pizza</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Vege Green Salad</a></h3>
                            <span class="text-category">$12.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item pasta">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product4.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product4_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Pasta</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Herbal Hot Tea</a></h3>
                            <span class="text-category">$8.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item drink">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product5.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product5_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Drink</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Fruit Salad</a></h3>
                            <span class="text-category">$16.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item hamburger">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product6.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product6_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Hamburger</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Big Hamburger</a></h3>
                            <span class="text-category">$8.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item pizza">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product7.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product7_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Pizza</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Chocolate Cake</a></h3>
                            <span class="text-category">$14.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item pasta">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product8.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product8_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Pasta</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Pizza Taste</a></h3>
                            <span class="text-category">$15.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item hamburger">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product3.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product3_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Hamburger</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Hot Meat Grilled</a></h3>
                            <span class="text-category">$16.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item drink">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product2.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product2_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Drink</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">New Ginger Taste</a></h3>
                            <span class="text-category">$18.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item ginger">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product1.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product1_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Ginger</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">Hot Coffee</a></h3>
                            <span class="text-category">$16.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mix portfolio-item pasta">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src="{{URL::asset('images/product6.jpg')}}" alt=""/>

                            <div class="hover">
                                <div class="hover-iner">
                                    <a class="fancybox" href="{{URL::asset('images/product6_big.jpg')}}"><img
                                                src="{{URL::asset('images/open-icon.png')}}"
                                                alt=""/></a>
                                    <span>Pasta</span>
                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.html">SUMMER FRUIT SALADE</a></h3>
                            <span class="text-category">$16.00</span>
                        </div>
                    </div>
                </div>
            </div>
            --}}{{--<div class="pagination">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
            </div>--}}{{--
        </div>
    </div>--}}
    <div id="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        {{--<h2>Latest blog posts</h2>--}}
                        <img src="{{URL::asset('images/under-heading.png')}}" alt="" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="{{URL::asset('images/blogpost1.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="content-show">
                                <h4><a href="single-post.html">Summer Sandwich</a></h4>
                                <span>29 Sep 2084</span>
                            </div>
                            <div class="content-hide">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="{{URL::asset('images/blogpost2.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="content-show">
                                <h4><a href="single-post.html">New Great Taste</a></h4>
                                <span>23 Sep 2084</span>
                            </div>
                            <div class="content-hide">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="{{URL::asset('images/blogpost3.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="content-show">
                                <h4><a href="single-post.html">Spicy Pizza</a></h4>
                                <span>14 Sep 2084</span>
                            </div>
                            <div class="content-hide">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="{{URL::asset('images/blogpost4.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="content-show">
                                <h4><a href="single-post.html">Healthy Food</a></h4>
                                <span>25 Aug 2084</span>
                            </div>
                            <div class="content-hide">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="{{URL::asset('images/blogpost5.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="content-show">
                                <h4><a href="single-post.html">Great Breakfast</a></h4>
                                <span>17 Aug 2084</span>
                            </div>
                            <div class="content-hide">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="{{URL::asset('images/blogpost6.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="content-show">
                                <h4><a href="single-post.html">Fresh Fruit Juice</a></h4>
                                <span>12 Aug 2084</span>
                            </div>
                            <div class="content-hide">
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


