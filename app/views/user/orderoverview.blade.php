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
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Ordered Menus</div>
                <canvas id="menuChartAdmin" height="50px"></canvas>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <h4 class="margin-bottom-15">Latest ordered Menus</h4>
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Delivery Date</th>
                <th>Menu</th>
                <th>Ordering Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>18.12.2014 14:00</td>
                <td>Menu1</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Delete</button>
                    </div>
                </td>

            </tr>
            <tr>
                <td>2</td>
                <td>18.12.2014 14:00</td>
                <td>Menu1</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Delete</button>
                    </div>
                </td>

            </tr>
            <tr>
                <td>3</td>
                <td>18.12.2014 14:00</td>
                <td>Menu1</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Delete</button>
                    </div>
                </td>

            </tr>
            <tr>
                <td>4</td>
                <td>18.12.2014 14:00</td>
                <td>Menu1</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Delete</button>
                    </div>
                </td>

            </tr>
            <tr>
                <td>5</td>
                <td>18.12.2014 14:00</td>
                <td>Menu1</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Delete</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>18.12.2014 14:00</td>
                <td>Menu1</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <ul class="pagination pull-right">
        <li class="disabled"><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
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
    <script type="text/javascript">
        $("#menuoverview").removeClass('active');
        $("#orderoverview").removeClass('active');
        $("#profile").removeClass('active');
        $("#orderoverview").addClass('active');
    </script>
@stop