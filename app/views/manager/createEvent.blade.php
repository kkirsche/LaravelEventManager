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
                    <li class="active"><a href="{{ URL::to('manager/createEvent') }}" title="Create An Event"><i class="icon-plus"></i> Create An Event</a></li>
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
                            <li class="active"><a href="{{ URL::to('manager/createEvent') }}" title="Create An Event"><i class="icon-plus"></i> Create An Event</a> <span class="divider">/</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span9">
                        {{ Form::open(array('url' => '/manager/createEvent', 'class' => 'span9')) }}
                            <fieldset>
                                <legend>General Event Details</legend>
                                {{ Form::label('eventName', 'Title:') }}
                                {{ Form::text('eventName', '', array('class' => 'span9', 'placeholder' => 'Title')) }}
                                <label for="eventDescription">Event Description: <i class="icon-question-sign"></i></label>
                                {{ Form::textarea('eventDescription', '', array('class' => 'span9', 'placeholder' => 'Event Description&hellip;')) }}
                                {{ Form::label('eventCapacity', 'Capacity:') }}
                                {{ Form::text('eventCapacity', '', array('class' => 'span4', 'placeholder' => 'Event Capacity')) }}
                            </fieldset>
                            <fieldset>
                                <legend>Who can register for this event?</legend>
                                <label class="radio checked">
                                    <span class="icons"><span class="first-icon fui-radio-unchecked"></span><span class="second-icon fui-radio-checked"></span></span><input type="radio" name="whoCanRegisterForEvent" id="optionsRadios1" value="public" data-toggle="radio" checked="checked">
                                    Anyone can register for the event through the event website (public registration)
                                  </label>
                                  <label class="radio">
                                    <span class="icons"><span class="first-icon fui-radio-unchecked"></span><span class="second-icon fui-radio-checked"></span></span><input type="radio" name="whoCanRegisterForEvent" id="optionsRadios2" value="private" data-toggle="radio">
                                    Only those on a targeted list can register for this event (private registration)
                                  </label>
                            </fieldset>
                            <fieldset>
                                <legend>Event Location</legend>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('eventLocationName', 'Location Name:') }}
                                        {{ Form::text('eventLocationName', '', array('class' => 'span4', 'placeholder' => 'Location Name')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('eventLocationAddress1', 'Address 1:') }}
                                        {{ Form::text('eventLocationAddress1', '', array('class' => 'span4', 'placeholder' => 'Address 1')) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('eventLocationAddress2', 'Address 2:') }}
                                        {{ Form::text('eventLocationAddress2', '', array('class' => 'span4', 'placeholder' => 'Address 2')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('eventLocationAddress3', 'Address 3:') }}
                                        {{ Form::text('eventLocationAddress3', '', array('class' => 'span4', 'placeholder' => 'Address 3')) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('eventLocationCity', 'City:') }}
                                        {{ Form::text('eventLocationCity', '', array('class' => 'span4', 'placeholder' => 'City')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('eventLocationState', 'State:') }}
                                        {{ Form::text('eventLocationState', '', array('class' => 'span4', 'placeholder' => 'State')) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span3">
                                        {{ Form::label('eventLocationZIP', 'ZIP/Postal Code:') }}
                                        {{ Form::text('eventLocationZIP', '', array('class' => 'span3', 'placeholder' => 'ZIP/Postal Code')) }}
                                    </div>
                                    <div class="span3">
                                        {{ Form::label('eventLocationCountry', 'Country:') }}
                                        {{ Form::text('eventLocationCountry', '', array('class' => 'span3', 'placeholder' => 'Country')) }}
                                    </div>
                                    <div class="span3">
                                        {{ Form::label('eventLocationPhone', 'Phone Number:') }}
                                        {{ Form::text('eventLocationPhone', '', array('class' => 'span3', 'placeholder' => 'Phone Number')) }}
                                    </div>
                                </div>



                            </fieldset>
                            <fieldset>
                                <legend>Event Time</legend>
                                {{ Form::label('eventTimezone', 'Event Time Zone:') }}
                                {{ Form::text('eventTimezone', '', array('class' => 'span9', 'placeholder' => 'Event Time Zone')) }}
                                <div class="row">
                                    <div class="span4">
                                        <label for="eventStartDate"><i class="icon-calendar"></i> Start Date:</label>
                                        <input type="date" class="span4 hasDatepicker" id="startDate" name="eventStartDate">
                                    </div>
                                    <div class="offset1 span3">
                                        <label for="eventEndDate"><i class="icon-calendar"></i> End Date:</label>
                                        <input type="date" class="span4 hasDatepicker" id="endDate" name="eventEndDate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        <label for="eventRSVPEndDate"><i class="icon-calendar"></i> RSVP By Date:</label>
                                        <input type="date" class="span4 hasDatepicker" id="eventRSVPEndDate" name="eventRSVPEndDate">
                                    </div>
                                    <div class="offset1 span3">
                                        <label for="eventPublishDate"><i class="icon-calendar"></i> Publish Event Date:</label>
                                        <input type="date" class="span4 hasDatepicker" id="eventPublishDate" name="eventPublishDate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        <label for="eventArchiveDate"><i class="icon-calendar"></i> Archive Event Date:</label>
                                        <input type="date" class="span4 hasDatepicker" id="eventArchiveDate" name="eventArchiveDate">
                                    </div>
                                </div>
                            </fieldset>
                            <hr />
                            <button type="submit" class="btn btn-primary">Create Event</button>
                          {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop