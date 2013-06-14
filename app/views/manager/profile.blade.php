@extends('main')

@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="span3">
                <ul class="nav nav-list">
                    <li><a href="{{ URL::to('manager') }}" title="Home"><i class="icon-home"></i> Home</a></li>
                    <li class="active"><a href="{{ URL::to('manager/profile') }}" title="Profile"><i class="icon-user"></i> My Profile</a></li>

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
                    <li><a href="{{ URL::to('manager/settings') }}" title="Settings"><i class="icon-cogs"></i>Settings</a></li>
                    <li><a href="{{ URL::to('manager/paymentSettings') }}" title="Payment Settings"><i class="icon-credit-card"></i> Payment Settings</a></li>
                </ul>
            </div>
            <div class="span9">
                <div class="row">
                    <div class="span9">
                        <ul class="breadcrumb">
                            <li><a href="{{ URL::to('manager') }}" title="Home"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
                            <li class="active"><a href="{{ URL::to('manager/profile') }}" title="My Profile"><i class="icon-user"></i> My Profile</a> <span class="divider">/</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        {{ Form::open(array('url' => '/manager/profile', 'class' => 'span9')) }}
                            <fieldset>
                                <legend>Name</legend>
                                {{ Form::label('Username', 'Username:') }}
                                {{ Form::text('Username', '', array('class' => 'span9', 'placeholder' => 'Username')) }}
                                {{ Form::label('First Name', 'First Name:') }}
                                {{ Form::text('First Name', '', array('class' => 'span9', 'placeholder' => 'First Name')) }}
                                {{ Form::label('Last Name', 'Last Name:') }}
                                {{ Form::text('Last Name', '', array('class' => 'span9', 'placeholder' => 'Last Name')) }}
                                {{ Form::label('DisplayName', 'Display Name publicly as:') }}
                                {{ Form::text('DisplayName', '', array('class' => 'span9', 'placeholder' => 'Display Name publicly as (required)', 'required')) }}
                            </fieldset>
                            <fieldset>
                                <legend>Contact Info</legend>
                                {{ Form::label('Email', 'Email:') }}
                                {{ Form::email('Email', '', array('class' => 'span9', 'placeholder' => 'Email (required)', 'required')) }}
                                {{ Form::label('Website', 'Website:') }}
                                {{ Form::text('Website', '', array('class' => 'span9', 'placeholder' => 'Website')) }}
                            </fieldset>
                            <fieldset>
                                <legend>Role</legend>
                                <!-- To be added -->
                            </fieldset>
                            <fieldset>
                                <legend>Password</legend>
                                {{ Form::label('Password', 'New Password:') }}
                                <input class="span9" type="password" name="Password" placeholder="Password">
                                {{ Form::label('Confirm Password', 'Confirm New Password:') }}
                                <input class="span9" type="password" name="Confirm Password" placeholder="Confirm Password">
                            </fieldset>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                          {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop