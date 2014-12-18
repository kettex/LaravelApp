<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 18.12.2014
 * Time: 10:44
 */
?>
@extends('layouts.user')
@section('title')
    <title>Menu Overview</title>
@stop
@section('header')
    <h1>Menu Overview</h1>
@stop

@section('content')
    <form>
        <div class="row borderBottomRed">
            <h3>22.12.2014</h3>
            <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1">
                <div class="menuItem">
                    <h4>
                        Menu Item #1
                    </h4>

                    <p>
                        Sed ut perspiciatis unde omnis
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <span class="menuInput">
                <input type="number" class="form-control" min="0">
            </span>
            </div>
        </div>
        <div class="row borderBottomRed">
            <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1">
                <div class="menuItem">
                    <h4>
                        Menu Item #2
                    </h4>

                    <p>
                        Sed ut perspiciatis unde omnis
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <span class="menuInput">
                <input type="number" class="form-control" min="0">
            </span>
            </div>
        </div>
        <div class="row borderBottomRed">
            <h3>23.12.2014</h3>
            <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1">
                <div class="menuItem">
                    <h4>
                        Menu Item #1
                    </h4>

                    <p>
                        Sed ut perspiciatis unde omnis
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <span class="menuInput">
                <input type="number" min="0" class="form-control">
            </span>
            </div>
        </div>
        <div class="row borderBottomRed">
            <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1">
                <div class="menuItem">
                    <h4>
                        Menu Item #2
                    </h4>

                    <p>
                        Sed ut perspiciatis unde omnis
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <span class="menuInput">
                <input type="number" min="0" class="form-control">
            </span>
            </div>
        </div>
        <div class="row borderBottomRed">
            <h3>29.12.2014</h3>
            <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1">
                <div class="menuItem">
                    <h4>
                        Menu Item #1
                    </h4>

                    <p>
                        Sed ut perspiciatis unde omnis
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <span class="menuInput">
                <input type="number" min="0" class="form-control">
            </span>
            </div>
        </div>
        <div class="row borderBottomRed">
            <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1">
                <div class="menuItem">
                    <h4>
                        Menu Item #2
                    </h4>

                    <p>
                        Sed ut perspiciatis unde omnis
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
            <span class="menuInput">
                <input type="number" min="0" class="form-control">
            </span>
            </div>
        </div>
        <div class="row" style="margin-top: 20px; margin-bottom: 20px">
            <div class="col-md-1 col-sm-1">
                <button type="submit" class="btn btn-default">Order</button>
            </div>
        </div>
    </form>
@stop
@section('scripts')
    <script type="text/javascript">
        $("#menuoverview").removeClass('active');
        $("#orderoverview").removeClass('active');
        $("#profile").removeClass('active');
        $("#menuoverview").addClass('active');
    </script>
@stop