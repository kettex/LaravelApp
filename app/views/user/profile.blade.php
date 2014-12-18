<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 18.12.2014
 * Time: 10:44
 */
?>
@section('title')
    <title>Profile</title>
@stop
@section('header')
    <h1>Profile</h1>
@stop
@extends('layouts.user')
@section('content')

    <form class="form-horizontal templatemo-signin-form" role="form" action="index.html" method="post">
        <div class="row">
            <div class="col-md-12 ">
                <label for="CompanyName">Company</label>
                <input type="text" class="form-control" id="CompanyName" placeholder="Company"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <label for="FirstName">Firstname</label>
                <input type="text" class="form-control" id="FirstName" placeholder="Firstname"/>
            </div>
            <div class="col-md-6 ">
                <label for="LastName">Lastname</label>
                <input type="text" class="form-control" id="LastName" placeholder="Lastname"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <label for="UserName">Username</label>
                <input type="text" class="form-control" id="UserName" placeholder="Username"/>
            </div>
            <div class="col-md-6 ">
                <label for="EMail">E-Mail</label>
                <input type="email" class="form-control" id="EMail" placeholder="E-Mail"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password"/>
            </div>
            <div class="col-md-6 ">
                <label for="ConfirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="RepeatPassword" placeholder="Password"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
                <label for="DeliveryAddress">Delivery Address</label>
                <input type="text" class="form-control" id="DeliveryAddress" placeholder="Delivery Address"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ">
                <label for="DeliveryZip">ZIP</label>
                <input type="text" class="form-control" id="DeliveryZip" placeholder="ZIP"/>
            </div>
            <div class="col-md-8 ">
                <label for="DeliveryCity">City</label>
                <input type="text" class="form-control" placeholder="City"/>
            </div>
        </div>

        <div class="form-group" style="margin-top: 30px">
            <div class="col-md-12">
                <div class="col-md-offset-10 col-md-2">
                    <input type="submit" value="Update" class="btn btn-default">
                </div>
            </div>
        </div>
    </form>
@stop
@section('scripts')
    <script type="text/javascript">
        $("#menuoverview").removeClass('active');
        $("#orderoverview").removeClass('active');
        $("#profile").removeClass('active');
        $("#profile").addClass('active');
    </script>
@stop