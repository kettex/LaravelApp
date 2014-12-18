<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 16.12.2014
 * Time: 21:32
 */
?>
@extends('layouts.dashboard')

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
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Delivery Date</th>
                <th>Company</th>
                <th>Menu</th>
                <th>Email</th>
                <th>Ordering Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>18.12.2014 14:00</td>
                <td>Company1</td>
                <td>Menu1</td>
                <td>company1@mail.com</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <!-- Split button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>2</td>
                <td>18.12.2014 14:00</td>
                <td>Company2</td>
                <td>Menu1</td>
                <td>company2@mail.com</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <!-- Split button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>3</td>
                <td>18.12.2014 14:00</td>
                <td>Company3</td>
                <td>Menu1</td>
                <td>company3@mail.com</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <!-- Split button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>4</td>
                <td>18.12.2014 14:00</td>
                <td>Company4</td>
                <td>Menu1</td>
                <td>company4@mail.com</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <!-- Split button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>

            </tr>
            <tr>
                <td>5</td>
                <td>18.12.2014 14:00</td>
                <td>Company5</td>
                <td>Menu1</td>
                <td>company5@mail.com</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <!-- Split button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>18.12.2014 14:00</td>
                <td>Company6</td>
                <td>Menu1</td>
                <td>company6@mail.com</td>
                <td>11.12.2014 09:00</td>
                <td>
                    <!-- Split button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Delete</a></li>
                        </ul>
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
@stop
@section('scripts')
    <script type="text/javascript">
        $("#dashboard").removeClass('active');
        $("#menumanagement").removeClass('active');
        $("#usermanagement").removeClass('active');
        $("#dashboard").addClass('active');
    </script>
@stop