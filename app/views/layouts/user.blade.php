<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 16.12.2014
 * Time: 12:02
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    @yield('title')
    <style>
        .borderBottomRed {
            border-bottom: 1px solid #F03063;
        }

        .menuItem {
            padding: 25px 0px 5px 5px;
            margin-bottom: 30px;
            width: 100%;
            position: relative;
        }

        .menuInput {
            display: block;
            position: relative;
            top: 40px;
            right: 0px;
            width: 90px;
            padding: 5px;
        }
    </style>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ URL::asset('dashboard/css/templatemo_main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}"/>
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <div class="logo">@yield('header')</div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
</div>
<div class="template-page-wrapper">
    <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
            <li>
                {{--<form class="navbar-form">
                    <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
                    <span class="btn btn-default">Go</span>
                </form>--}}
            </li>
            <li class="active" id="menuoverview"><a href="{{URL::to('user/menuoverview')}}"><i class="fa fa-home"></i>Menu
                    Overview</a></li>
            <li id="orderoverview"><a href="{{URL::to('user/orderoverview')}}"><i class="fa fa-cubes"></i>Order Overview</a>
            </li>
            <li id="profile"><a href="{{URL::to('user/profile')}}"><i class="fa fa-map-marker"></i>Profile</a></li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign
                    Out</a></li>
        </ul>
    </div>
    <!--/.navbar-collapse -->
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            @yield('content')
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
                </div>
                <div class="modal-footer">
                    <a href="{{URL::to('admin/signout')}}" class="btn btn-primary">Yes</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    {{--<footer class="templatemo-footer">
        <div class="templatemo-copyright">
            <p>Copyright &copy; 2014 Spendl/Kettl</p>
        </div>
    </footer>--}}
</div>

<script src="{{ URL::asset('dashboard/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('dashboard/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('dashboard/js/Chart.min.js') }}"></script>
<script src="{{ URL::asset('dashboard/js/templatemo_script.js') }}"></script>
@yield('scripts')
</body>
</html>