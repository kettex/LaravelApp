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
    <title>Order Overview</title>
@stop
@section('header')
    <h1>Order Overview</h1>
@stop

@section('content')
    <div class="table-responsive">
        <h4 class="margin-bottom-15">Latest ordered Menus</h4>
        <table data-toggle="table"
               data-show-refresh="true"
               data-show-toggle="true"
               data-show-columns="true"
               data-pagination="true"
               data-page-list="[10, 20, 50, 100]"
               data-url="/user/getLatestOrderedMenus"
               data-side-pagination="server">
            <thead>
            <tr>
                <th data-field="menuDate" data-sortable="false">Date</th>
                <th data-field="menuTitle" data-sortable="false">Menu</th>
                <th data-field="menuDescription" data-sortable="false">Description</th>
            </tr>
            </thead>
        </table>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        $("#menuoverview").removeClass('active');
        $("#orderoverview").removeClass('active');
        $("#profile").removeClass('active');
        $("#orderoverview").addClass('active');
    </script>
@stop