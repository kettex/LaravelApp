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
                        <h2>Login</h2>
                        <span>Home / <a href="{{URL::to('Login')}}">Register</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container" style="margin-top: 40px;">
    <form class="form-horizontal templatemo-signin-form" role="form" action="index.html" method="get">
        <div class="form-group">
            <div class="col-md-12">
                <label for="username" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <div class="col-md-offset-10 col-md-2">
                    <input type="submit" value="Sign in" class="btn btn-default">
                </div>
            </div>
        </div>
    </form>
</div>
@stop

