<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 18.12.2014
 * Time: 10:44
 */
?>
@extends('layouts.user)

@section('header')
    <h1>Order Overview</h1>
@stop

@section('content')
    <h1>Hello World</h1>
@stop
@section('scripts')
    <script type="text/javascript">
        $("#menuoverview").removeClass('active');
        $("#orderoverview").removeClass('active');
        $("#profile").removeClass('active');
        $("#orderoverview").addClass('active');
    </script>
@stop