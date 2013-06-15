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
                        {{ Form::open(array('url' => '/manager/profile', 'method' => 'POST', 'class' => 'span9')) }}
                            <fieldset>
                                <legend>Name</legend>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('username', 'Username:') }}
                                        {{ Form::text('username', Session::get('username'), array('class' => 'span4', 'placeholder' => 'Username')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('displayName', 'Display Name publicly as:') }}
                                        {{ Form::text('displayName', Session::get('displayName'), array('class' => 'span4', 'placeholder' => 'Display Name publicly as (required)', 'required')) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('firstName', 'First Name:') }}
                                        {{ Form::text('firstName', Session::get('firstName'), array('class' => 'span4', 'placeholder' => 'First Name')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('lastName', 'Last Name:') }}
                                        {{ Form::text('lastName', Session::get('lastName'), array('class' => 'span4', 'placeholder' => 'Last Name')) }}
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Contact Info</legend>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('email', 'Email:') }}
                                        {{ Form::email('email', Session::get('email'), array('class' => 'span4', 'placeholder' => 'Email (required)', 'required')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('website', 'Website:') }}
                                        {{ Form::text('website', Session::get('website'), array('class' => 'span4', 'placeholder' => 'Website')) }}
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Role</legend>
                                {{ Form::label('userRole', 'Role:') }}
                                {{ Form::select('userRole', array('0' => 'User', '1' => 'Author', '2' => 'Editor', '3' => 'Administrator'), Session::get('role')) }}
                            </fieldset>
                            <fieldset>
                                <legend>Password</legend>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('Password', 'New Password:') }}
                                        <input class="span4" type="password" name="newPassword" placeholder="Password">
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('Confirm Password', 'Confirm New Password:') }}
                                        <input class="span4" type="password" name="confirmNewPassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </fieldset>
                            <hr />
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                          {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop