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
    <title>Admin Menu Management</title>
@stop
@section('header')
    <h1>Admin Menu Management</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" id="templatemo-tabs">
                <li class="active"><a href="#home" role="tab" data-toggle="tab">Online Menus</a></li>
                <li><a href="#profile" role="tab" data-toggle="tab">Offline Menus</a></li>
                <li><a href="#messages" role="tab" data-toggle="tab">Import Excel</a></li>
                <li><a href="#settings" role="tab" data-toggle="tab">Import CSV</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Menu</th>
                                <th>Order Count</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>18.12.2014 14:00</td>
                                <td>Menu1</td>
                                <td>2</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#" onclick="openEditMenuModal()">Edit</a></li>
                                            <li><a href="#">Take offline</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>18.12.2014 14:00</td>
                                <td>Menu2</td>
                                <td>2</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take offline</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>19.12.2014 14:00</td>
                                <td>Menu1</td>
                                <td>2</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take offline</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>19.12.2014 14:00</td>
                                <td>Menu2</td>
                                <td>2</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take offline</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>22.12.2014 14:00</td>
                                <td>Menu1</td>
                                <td>2</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take offline</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>22.12.2014 14:00</td>
                                <td>Menu2</td>
                                <td>2</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take offline</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Menu</th>
                                <th>Order Count</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>07.01.2015 14:00</td>
                                <td>Menu1</td>
                                <td>0</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take online</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>07.01.2015 14:00</td>
                                <td>Menu2</td>
                                <td>0</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take online</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>08.01.2015 14:00</td>
                                <td>Menu1</td>
                                <td>0</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take online</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>08.01.2015 14:00</td>
                                <td>Menu2</td>
                                <td>0</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take online</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>09.01.2015 14:00</td>
                                <td>Menu1</td>
                                <td>0</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take online</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>09.01.2015 14:00</td>
                                <td>Menu2</td>
                                <td>0</td>
                                <td>07.12.2014 09:00</td>
                                <td>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Take online</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <form action="/file-upload"
                          class="dropzone"></form>
                </div>
                <div class="tab-pane fade" id="settings">
                    <form action="/file-upload"
                          class="dropzone"></form>
                </div>
            </div>
            <!-- tab-content -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Menu</h4>
                </div>
                <div class="modal-body">
                    {{ Form::open(['method' => 'post', 'url' => 'menu/edit', 'class' => 'form-horizontal templatemo-signin-form', 'id' => 'editMenuForm']) }}
                    <input type="hidden" name="id"/>

                    <div class="row">
                        <div class="col-md-12 ">
                            <label for="MenuDate">Date</label>
                            <input type="date" class="form-control" id="MenuDate" name="menuDate"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="Menu">Menu</label>
                            <input type="text" class="form-control" id="Menu" name="menuTitle"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="MenuDescription">Description</label>
                            <input type="text" class="form-control" id="MenuDescription" name="menuDescription"/>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
                <div class="modal-footer">
                    <input type="button" onclick="saveMenu()" value="Save" class="btn btn-primary">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Discard</button>
                </div>
            </div>
        </div>
    </div>

@stop
@section('scripts')
    <script src="{{ URL::asset('js/MenuManagement/menumanagement.js') }}"></script>
    <script type="text/javascript">
        $("#dashboard").removeClass('active');
        $("#menumanagement").removeClass('active');
        $("#usermanagement").removeClass('active');
        $("#menumanagement").addClass('active');
    </script>
@stop

