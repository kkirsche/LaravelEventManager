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
                                {{ Form::label('title', 'Title:') }}
                                {{ Form::text('title', '', array('class' => 'span9', 'placeholder' => 'Title')) }}
                                <label for="description">Event Description: <i class="icon-question-sign"></i></label>
                                {{ Form::textarea('description', '', array('class' => 'span9', 'placeholder' => 'Event Description&hellip;')) }}
                                {{ Form::label('capacity', 'Capacity:') }}
                                {{ Form::text('capacity', '', array('class' => 'span4', 'placeholder' => 'Event Capacity')) }}
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
                                        {{ Form::label('locationName', 'Location Name:') }}
                                        {{ Form::text('locationName', '', array('class' => 'span4', 'placeholder' => 'Location Name')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('locationAddress1', 'Address 1:') }}
                                        {{ Form::text('locationAddress1', '', array('class' => 'span4', 'placeholder' => 'Address 1')) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('locationAddress2', 'Address 2:') }}
                                        {{ Form::text('locationAddress2', '', array('class' => 'span4', 'placeholder' => 'Address 2')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('locationAddress3', 'Address 3:') }}
                                        {{ Form::text('locationAddress3', '', array('class' => 'span4', 'placeholder' => 'Address 3')) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        {{ Form::label('locationCity', 'City:') }}
                                        {{ Form::text('locationCity', '', array('class' => 'span4', 'placeholder' => 'City')) }}
                                    </div>
                                    <div class="offset1 span4">
                                        {{ Form::label('locationState', 'State:') }}
                                        {{ Form::text('locationState', '', array('class' => 'span4', 'placeholder' => 'State')) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span3">
                                        {{ Form::label('locationZip', 'ZIP/Postal Code:') }}
                                        {{ Form::text('locationZip', '', array('class' => 'span3', 'placeholder' => 'ZIP/Postal Code')) }}
                                    </div>
                                    <div class="span3">
                                        {{ Form::label('locationCountry', 'Country:') }}
                                        {{ Form::text('locationCountry', '', array('class' => 'span3', 'placeholder' => 'Country')) }}
                                    </div>
                                    <div class="span3">
                                        {{ Form::label('locationPhone', 'Phone Number:') }}
                                        {{ Form::text('locationPhone', '', array('class' => 'span3', 'placeholder' => 'Phone Number')) }}
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
                                        <label for="rsvpByDate"><i class="icon-calendar"></i> RSVP By Date:</label>
                                        <input type="date" class="span4 hasDatepicker" id="rsvpByDate" name="rsvpByDate">
                                    </div>
                                    <div class="offset1 span3">
                                        <label for="publishEventDate"><i class="icon-calendar"></i> Publish Event Date:</label>
                                        <input type="date" class="span4 hasDatepicker" id="publishEventDate" name="publishEventDate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4">
                                        <label for="archiveEventDate"><i class="icon-calendar"></i> Archive Event Date:</label>
                                        <input type="date" class="span4 hasDatepicker" id="archiveEventDate" name="archiveEventDate">
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-primary">Create Event</button>
                          {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop