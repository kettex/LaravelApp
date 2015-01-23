<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 16.12.2014
 * Time: 11:30
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    @yield('title')
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ URL::asset('dashboard/css/templatemo_main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{URL::asset('dashboard/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dashboard/css/basic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-tables/bootstrap-table.css')}}">
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
            <li class="active" id="dashboard"><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-home"></i>Dashboard</a></li>
            <li id="menumanagement"><a href="{{URL::to('admin/menumanagement')}}"><i class="fa fa-cubes"></i>Menu Management</a></li>
            <li id="usermanagement"><a href="{{URL::to('admin/usermanagement')}}"><i class="fa fa-map-marker"></i>User Management</a></li>
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
</div>

<script src="{{ URL::asset('dashboard/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('dashboard/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('dashboard/js/Chart.min.js') }}"></script>
<script src="{{ URL::asset('dashboard/js/templatemo_script.js') }}"></script>
<script src="{{URL::asset('dashboard/js/dropzone.js')}}"></script>
<script src="{{URL::asset('js/bootstrap-table/bootstrap-table.js')}}"></script>
@yield('scripts')
</body>
</html>