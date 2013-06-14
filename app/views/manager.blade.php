@extends('main')

@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="span3">
                <ul class="nav nav-list">
                    <li class="active"><a href="{{ URL::to('manager') }}" title="Home"><i class="icon-home"></i> Home</a></li>
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
                    <li><a href="{{ URL::to('manager/settings') }}" title="Settings"><i class="icon-cogs"></i>Settings</a></li>
                    <li><a href="{{ URL::to('manager/paymentSettings') }}" title="Payment Settings"><i class="icon-credit-card"></i> Payment Settings</a></li>
                </ul>
            </div>
            <div class="span9">
                <div class="row">
                    <div class="span9">
                        <ul class="breadcrumb">
                            <li class="active"><a href="{{ URL::to('manager') }}" title="Home">Home</a> <span class="divider">/</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span5">
                        <h4>Quick Links</h4>
                        <hr />
                        <ul>
                            <li><a href="#">Example Quick Link</a></li>
                            <li><a href="#">Example Quick Link</a></li>
                            <li><a href="#">Example Quick Link</a></li>
                            <li><a href="#">Example Quick Link</a></li>
                            <li><a href="#">Example Quick Link</a></li>
                            <li><a href="#">Example Quick Link</a></li>
                            <li><a href="#">Example Quick Link</a></li>
                    </div>
                    <div class="span3 well">
                            <h4>Summary</h4>
                            <hr />
                            <p><strong>Total Events:</strong> 14</p>
                            <p><strong>Event Types:</strong> 5</p>
                            <p><strong>Total Calendars:</strong> 9</p>
                            <p><strong>Calendar Types:</strong> 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop