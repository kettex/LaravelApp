<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 18.12.2014
 * Time: 10:44
 */
?>
@section('title')
    <title>Profile</title>
@stop
@section('header')
    <h1>Profile</h1>
@stop
@extends('layouts.user')
@section('content')

    {{ Form::model($user, ['method' => 'post', 'class' => 'form-horizontal templatemo-signin-form', 'id' => 'updateProfileForm']) }}
    <div class="row margin-bottom-15">
        <div class="col-md-12">
            <label for="company" class="control-label">Company</label>
            <input type="text" class="form-control" id="company" name="company" placeholder="Company"
                   value="{{$user->company}}"/>
        </div>
    </div>
    <div class="row margin-bottom-15">
        <div class="col-md-12">
            <label for="EMail" class="control-label">E-Mail</label>
            <input type="email" class="form-control" id="EMail" name="email" placeholder="E-Mail"
                   value="{{$user->email}}"/>
        </div>
    </div>
    <div class="row margin-bottom-15">
        <div class="col-md-12 ">
            <label for="DeliveryAddress" class="control-label">Delivery Address</label>
            <input type="text" class="form-control" id="DeliveryAddress" name="deliveryAddress"
                   placeholder="Delivery Address" value="{{$user->deliveryAddress}}"/>
        </div>
    </div>
    <div class="row margin-bottom-15">
        <div class="col-md-4 ">
            <label for="DeliveryZip" class="control-label">ZIP</label>
            <input type="text" class="form-control" id="DeliveryZip" name="zip" placeholder="ZIP"
                   value="{{$user->zip}}"/>
        </div>
        <div class="col-md-8 ">
            <label for="DeliveryCity" class="control-label">City</label>
            <input type="text" class="form-control" name="city" id="City" placeholder="City" value="{{$user->city}}"/>
        </div>
    </div>

    <div class="form-group" style="margin-top: 30px">
        <div class="col-md-12">
            <div class="col-md-offset-10 col-md-2">
                <input type="submit" value="Update" class="btn btn-default">
            </div>
        </div>
    </div>
    {{Form::close()}}
@stop
@section('scripts')
    <script type="text/javascript">
        $("#menuoverview").removeClass('active');
        $("#orderoverview").removeClass('active');
        $("#profile").removeClass('active');
        $("#profile").addClass('active');
    </script>
    <script>
        $(document).ready(function () {
            $('#updateProfileForm').formValidation({
                framework: 'bootstrap',
                icon: {
                    valid: null,
                    invalid: null,
                    validating: null
                },
                fields: {
                    company: {
                        validators: {
                            notEmpty: {
                                message: 'The company is required'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required'
                            },
                            emailAddress: {
                                message: 'The value is not a valid email address'
                            }
                        }
                    },
                    deliveryAddress: {
                        validators: {
                            notEmpty: {
                                message: 'The delivery address is required'
                            },
                            regexp: {
                                message: 'The delivery address is not valid',
                                regexp: /([a-zA-Z\s\.\-\ß]+)\s(.*[0-9]+.*)/i
                            }
                        }
                    },
                    zip: {
                        validators: {
                            notEmpty: {
                                message: 'The zip code is required'
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: 'The city is required'
                            }
                        }
                    }
                }
            });
        });
    </script>
@stop