@extends('main')

@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="span3">
                <ul class="nav nav-list">
                    <li><a href="{{ URL::to('manager') }}" title="Home"><i class="icon-home"></i> Home</a></li>
                    <li><a href="{{ URL::to('manager/profile') }}" title="Profile"><i class="icon-user"></i> My Profile</a></li>

                    <li class="divider"></li>

                    <li class="nav-header">Events</li>
                    <li><a href="{{ URL::to('manager/createEvent') }}" title="Create An Event"><i class="icon-plus"></i> Create An Event</a></li>
                    <li><a href="{{ URL::to('manager/manageEvents') }}" title="Manage Existing Events"><i class="icon-edit"></i> Manage Existing Events</a></li>
                    <li><a href="{{ URL::to('manager/createEventType') }}" title="Add New Event Type"><i class="icon-list-alt"></i> Add New Event Type</a></li>

                    <li class="divider"></li>

                    <li class="nav-header"><i class="icon-calendar"></i> Calendars</li>
                    <li><a href="{{ URL::to('manager/createCalendar') }}" title="Create A Calendar"><i class="icon-plus"></i> Create A Calendar</a></li>
                    <li><a href="{{ URL::to('manager/manageCalendars') }}" title="Manage Existing Calendars"><i class="icon-edit"></i> Manage Existing Calendars</a></li>
                    <li><a href="{{ URL::to('manager/createCalendarType') }}" title="Add New Calendar Type"><i class="icon-list-alt"></i> Add New Calendar Type</a></li>

                    <li class="divider"></li>

                    <li class="nav-header">Administratiion</li>
                    <li class="active"><a href="{{ URL::to('manager/settings') }}" title="Settings"><i class="icon-cogs"></i>Settings</a></li>
                    <li><a href="{{ URL::to('manager/paymentSettings') }}" title="Payment Settings"><i class="icon-credit-card"></i> Payment Settings</a></li>
                </ul>
            </div>
            <div class="span9">
                <div class="row">
                    <div class="span9">
                        <ul class="breadcrumb">
                            <li><a href="{{ URL::to('manager') }}" title="Home"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
                            <li class="active"><a href="{{ URL::to('manager/settings') }}" title="Settings"><i class="icon-cogs"></i> Settings</a> <span class="divider">/</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        {{ Form::open(array('url' => '/manager/profile', 'class' => 'span9')) }}
                            <fieldset>
                                <legend>General</legend>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('siteTitle', 'Site Title:') }}
                                        {{ Form::text('siteTitle', '', array('class' => 'span4', 'placeholder' => 'Site Title', 'required')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('siteAddress', 'Site Address (URL):') }}
                                        {{ Form::text('siteAddress', '', array('class' => 'span4', 'placeholder' => 'Site Address', 'required')) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('adminEmail', 'Administrative Email Address:') }}
                                        {{ Form::text('adminEmail', '', array('class' => 'span4', 'placeholder' => 'Administrative Email Address')) }}
                                        <small><em>This address is used for admin purposes, like new user notifications</em></small>
                                    </div>
                                    <div class="offset1 span4">
                                        <br />
                                        {{ Form::label('', 'User Registration:') }}
                                        <label class="checkbox" for="membership">
                                            <span class="icons"><span class="first-icon fui-checkbox-unchecked"></span><span class="second-icon fui-checkbox-checked"></span></span><input type="checkbox" value="1" id="membership" name="membership" data-toggle="checkbox">
                                            Anyone can register
                                      </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Date Formats</legend>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('dateFormat', 'Date Format:') }}
                                        <label class="radio">
                                        <span class="icons"><span class="first-icon fui-radio-checked"></span><span class="second-icon fui-radio-unchecked"></span></span><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
                                        June 14, 2013
                                      </label>
                                      <label class="radio">
                                        <span class="icons"><span class="first-icon fui-radio-unchecked"></span><span class="second-icon fui-radio-checked"></span></span><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
                                        2013/06/14
                                      </label>
                                      <label class="radio">
                                        <span class="icons"><span class="first-icon fui-radio-unchecked"></span><span class="second-icon fui-radio-checked"></span></span><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
                                        14/06/2013
                                      </label>
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('timeFormat', 'Time Format:') }}
                                        <label class="radio">
                                        <span class="icons"><span class="first-icon fui-radio-checked"></span><span class="second-icon fui-radio-unchecked"></span></span><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
                                        6:41 pm
                                      </label>
                                      <label class="radio">
                                        <span class="icons"><span class="first-icon fui-radio-unchecked"></span><span class="second-icon fui-radio-checked"></span></span><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
                                        6:41 PM
                                      </label>
                                      <label class="radio">
                                        <span class="icons"><span class="first-icon fui-radio-unchecked"></span><span class="second-icon fui-radio-checked"></span></span><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
                                        18:41
                                      </label>
                                    </div>
                                </div>
                            </fieldset>
                            <hr />
                            <button type="submit" class="btn btn-primary">Update Settings</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop