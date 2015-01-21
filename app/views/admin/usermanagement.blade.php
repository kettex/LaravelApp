<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 16.12.2014
 * Time: 21:32
 */
?>
@extends('layouts.dashboard')
@section('title')
<title>Admin User Management</title>
@stop
@section('header')
    <h1>Admin User Management</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
                <table data-toggle="table"
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true"
                       data-pagination="true"
                       data-page-list="[10, 20, 50, 100]"
                       data-url="/user/getUsers"
                       data-side-pagination="server">
                    <thead>
                    <tr>
                        <th data-field="username" data-sortable="true">Username</th>
                        <th data-field="email" data-sortable="true">E-Mail</th>
                        <th data-field="company" data-sortable="true">Company</th>
                        <th data-field="deliveryAddress" data-sortable="true">Delivery Address</th>
                        <th data-field="zip" data-sortable="true">ZIP</th>
                        <th data-field="city" data-sortable="true">City</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        $("#dashboard").removeClass('active');
        $("#menumanagement").removeClass('active');
        $("#usermanagement").removeClass('active');
        $("#usermanagement").addClass('active');
    </script>
@stop
