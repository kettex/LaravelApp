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
        @foreach($menus as $menu)
            <div class="row borderBottomRed">
                <!--format the date-->
                <h3>{{ date("Y-m-d",strtotime($menu->menuDate)) }}</h3>
                <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1">
                    <div class="menuItem">
                        <h4>
                            {{$menu->menuTitle}}
                        </h4>

                        <p>
                            {{$menu->menuDescription}}
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
            <span class="menuInput">
                <input type="number" class="form-control" min="0" id="{{$menu->id}}">
            </span>
                </div>
            </div>
        @endforeach

        <div class="row" style="margin-top: 20px; margin-bottom: 20px">
            <div class="col-md-1 col-sm-1">
                <button type="submit" class="btn btn-default" onclick="orderMenus()">Order</button>
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
    <script src="{{URL::asset('js/MenuOverview/menuoverview.js')}}"></script>
@stop