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
                <li class="active"><a href="#onlineMenus" role="tab" data-toggle="tab">Online Menus</a></li>
                <li><a href="#offlineMenus" role="tab" data-toggle="tab">Offline Menus</a></li>
                <li><a href="#importExcel" role="tab" data-toggle="tab">Import Excel</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="onlineMenus">
                    <div class="table-responsive">
                        <table data-toggle="table"
                               data-show-refresh="true"
                               data-show-toggle="true"
                               data-show-columns="true"
                               data-pagination="true"
                               data-page-list="[10, 20, 50, 100]"
                               data-url="/menu/getonlinemenus"
                               data-side-pagination="server">
                            <thead>
                            <tr>
                                <th data-field="menuDate" data-sortable="true">Date</th>
                                <th data-field="menuTitle" data-sortable="true">Menu</th>
                                <th data-field="menuDescription" data-sortable="true">Description</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="offlineMenus">
                    <div class="table-responsive">
                        <table data-toggle="table"
                               data-show-refresh="true"
                               data-show-toggle="true"
                               data-show-columns="true"
                               data-pagination="true"
                               data-page-list="[10, 20, 50, 100]"
                               data-url="/menu/getofflinemenus"
                               data-side-pagination="server"
                               data-click-to-select="true"
                                id="offlineMenusTable">
                            <thead>
                            <tr>
                                <th data-field="isActive" data-checkbox="true">Online</th>
                                <th data-field="menuDate" data-sortable="true">Date</th>
                                <th data-field="menuTitle" data-sortable="true">Menu</th>
                                <th data-field="menuDescription" data-sortable="true">Description</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <button type="button" class="btn btn-default" onclick="setMenusOnline()">Set online</button>
                </div>
                <div class="tab-pane fade" id="importExcel">
                    <form action="/admin/menumangement/importExcel"
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

