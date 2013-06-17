<?php

class Event extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'events';

	/**
	 * Add New Event To The Database
	 *
	 * @param array
	 * @return booelan
	 */
	public static function postCreateEvent($eventDetails)
	{
		$event = new Event;
		$event->eventCalendar 			= $eventDetails['eventCalendar'];
		$event->eventName				= $eventDetails['eventName'];
		$event->eventDescription		= $eventDetails['eventDescription'];
		$event->eventCapacity			= $eventDetails['eventCapacity'];
		$event->eventRegistrationType 	= $eventDetails['eventRegistrationType'];
		$event->eventLocationName		= $eventDetails['eventLocationName'];
		$event->eventLocationAddress1	= $eventDetails['eventLocationAddress1'];
		$event->eventLocationAddress2	= $eventDetails['eventLocationAddress2'];
		$event->eventLocationAddress3	= $eventDetails['eventLocationAddress3'];
		$event->eventLocationCity		= $eventDetails['eventLocationCity'];
		$event->eventLocationState		= $eventDetails['eventLocationState'];
		$event->eventLocationZIP		= $eventDetails['eventLocationZIP'];
		$event->eventLocationCountry	= $eventDetails['eventLocationCountry'];
		$event->eventLocationPhone		= $eventDetails['eventLocationPhone'];
		$event->eventStartDate			= $eventDetails['eventStartDate'];
		$event->eventEndDate			= $eventDetails['eventEndDate'];
		$event->eventStartTime			= $eventDetails['eventStartTime'];
		$event->eventEndTime			= $eventDetails['eventEndTime'];
		$event->eventRSVPEndDate		= $eventDetails['eventRSVPEndDate'];
		$event->eventPublishDate		= $eventDetails['eventPublishDate'];
		$event->eventArchiveDate		= $eventDetails['eventArchiveDate'];
		$event->created_at				= date('Y-m-d H:i:s');
		$event->updated_at				= date('Y-m-d H:i:s');
	}
}