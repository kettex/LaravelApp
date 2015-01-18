<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 16.12.2014
 * Time: 10:38
 */
?>
@extends('layouts.master')
@section('content')
    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Register</h2>
                        <span>Home / <a href="{{URL::to('register')}}">Register</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 40px">
        {{ Form::model($user, ['method' => 'post', 'class' => 'form-horizontal templatemo-signin-form']) }}
            <div class="row">
                <div class="col-md-12 ">
                    <label for="CompanyName">Company</label>
                    <input type="text" class="form-control" id="CompanyName" name="company" placeholder="Company"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <label for="UserName">Username</label>
                    <input type="text" class="form-control" id="UserName" name="userName" placeholder="Username"/>
                </div>
                <div class="col-md-6 ">
                    <label for="EMail">E-Mail</label>
                    <input type="email" class="form-control" id="EMail" name="email" placeholder="E-Mail"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" name="password" placeholder="Password"/>
                </div>
                <div class="col-md-6 ">
                    <label for="ConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="RepeatPassword" name="repeatPassword" placeholder="Password"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <label for="DeliveryAddress">Delivery Address</label>
                    <input type="text" class="form-control" id="DeliveryAddress" name="deliveryAddress" placeholder="Delivery Address"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <label for="DeliveryZip">ZIP</label>
                    <input type="text" class="form-control" id="DeliveryZip" name="zip" placeholder="ZIP"/>
                </div>
                <div class="col-md-8 ">
                    <label for="DeliveryCity">City</label>
                    <input type="text" class="form-control" name="city" id="City" placeholder="City"/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <div class="col-md-offset-10 col-md-2">
                        <input type="submit" value="Sign up" class="btn btn-default">
                    </div>
                </div>
            </div>
        {{Form::close()}}
    </div>
@stop

