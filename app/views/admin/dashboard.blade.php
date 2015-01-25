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
<title>Admin Dashboard</title>
@stop
@section('header')
    <h1>Admin Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Menu Overview</div>
                <canvas id="menuChartAdmin" height="50px"></canvas>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <h4 class="margin-bottom-15">Latest ordered Menus</h4>
        <table data-toggle="table"
               data-show-refresh="true"
               data-show-toggle="true"
               data-show-columns="true"
               data-pagination="true"
               data-page-list="[10, 20, 50, 100]"
               data-url="/admin/getLatestOrderedMenus"
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
        // Bar chart
        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100)
        };
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                }
            ]

        } // lineChartData

        $(document).ready(function () {
            var ctx_bar = $("#menuChartAdmin")[0].getContext("2d");

            new Chart(ctx_bar).Bar(barChartData, {
                responsive: true
            });
        });
    </script>
@stop
@section('scripts')
    <script type="text/javascript">
        $("#dashboard").removeClass('active');
        $("#menumanagement").removeClass('active');
        $("#usermanagement").removeClass('active');
        $("#dashboard").addClass('active');
    </script>
@stop