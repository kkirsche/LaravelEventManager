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
                    <li class="active"><a href="{{ URL::to('manager/createCalendar') }}" title="Create A Calendar"><i class="icon-plus"></i> Create A Calendar</a></li>
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
                            <li class="active"><a href="{{ URL::to('manager/createEvent') }}" title="Create An Event"><i class="icon-plus"></i> Create A Calendar</a> <span class="divider">/</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        {{ Form::open(array('url' => '/manager/createEvent', 'class' => 'span9')) }}
                            <fieldset>
                                <legend>General Calendar Details</legend>
                                {{ Form::label('title', 'Title:') }}
                                {{ Form::text('title', '', array('class' => 'span9', 'placeholder' => 'Title')) }}
                                <label for="description">Calendar Description: <i class="icon-question-sign"></i></label>
                                {{ Form::textarea('description', '', array('class' => 'span9', 'placeholder' => 'Calendar Description&hellip;')) }}
                            </fieldset>
                            <fieldset>
                                <legend>Who can view this calendar?</legend>
                                <label class="radio checked">
                                    <span class="icons"><span class="first-icon fui-radio-unchecked"></span><span class="second-icon fui-radio-checked"></span></span><input type="radio" name="whoCanRegisterForEvent" id="optionsRadios1" value="public" data-toggle="radio" checked="checked">
                                    Anyone can view this calendar through the event website (public)
                                  </label>
                                  <label class="radio">
                                    <span class="icons"><span class="first-icon fui-radio-unchecked"></span><span class="second-icon fui-radio-checked"></span></span><input type="radio" name="whoCanRegisterForEvent" id="optionsRadios2" value="private" data-toggle="radio">
                                    Only those with a specific role can view this calendar (private)
                                  </label>
                            </fieldset>
                            <hr />
                            <button type="submit" class="btn btn-primary">Create Calendar</button>
                          {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop