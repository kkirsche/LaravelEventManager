<?php

class CalendarEvent extends Eloquent {

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
	public function postCreateEvent($eventDetails)
	{
		$event = new CalendarEvent;
		$event->eventCalendar 			= (isset($eventDetails['eventCalendar']) ? $eventDetails['eventCalendar'] : 1);
		$event->eventName				= (isset($eventDetails['eventName']) ? $eventDetails['eventName'] : '');
		$event->eventDescription		= (isset($eventDetails['eventDescription']) ? $eventDetails['eventDescription'] : '');
		$event->eventCapacity			= (isset($eventDetails['eventCapacity']) ? $eventDetails['eventCapacity'] : '');
		$event->eventRegistrationType 	= (isset($eventDetails['eventRegistrationType']) ? $eventDetails['eventRegistrationType'] : '');
		$event->eventLocationName		= (isset($eventDetails['eventLocationName']) ? $eventDetails['eventLocationName'] : 'N/A');
		$event->eventLocationAddress1	= (isset($eventDetails['eventLocationAddress1']) ? $eventDetails['eventLocationAddress1'] : '');
		$event->eventLocationAddress2	= (isset($eventDetails['eventLocationAddress2']) ? $eventDetails['eventLocationAddress2'] : '');
		$event->eventLocationAddress3	= (isset($eventDetails['eventLocationAddress3']) ? $eventDetails['eventLocationAddress3'] : '');
		$event->eventLocationCity		= (isset($eventDetails['eventLocationCity']) ? $eventDetails['eventLocationCity'] : '');
		$event->eventLocationState		= (isset($eventDetails['eventLocationState']) ? $eventDetails['eventLocationState'] : '');
		$event->eventLocationZIP		= (isset($eventDetails['eventLocationZIP']) ? $eventDetails['eventLocationZIP'] : '');
		$event->eventLocationCountry	= (isset($eventDetails['eventLocationCountry']) ? $eventDetails['eventLocationCountry'] : '');
		$event->eventLocationPhone		= (isset($eventDetails['eventLocationPhone']) ? $eventDetails['eventLocationPhone'] : '');
		$event->eventStartDate			= (isset($eventDetails['eventStartDate']) ? $eventDetails['eventStartDate'] : '');
		$event->eventEndDate			= (isset($eventDetails['eventEndDate']) ? $eventDetails['eventEndDate'] : '');
		$event->eventStartTime			= (isset($eventDetails['eventStartTime']) ? $eventDetails['eventStartTime'] : '');
		$event->eventEndTime			= (isset($eventDetails['eventEndTime']) ? $eventDetails['eventEndTime'] : '');
		$event->eventRSVPEndDate		= (isset($eventDetails['eventRSVPEndDate']) ? $eventDetails['eventRSVPEndDate'] : '');
		$event->eventPublishDate		= (isset($eventDetails['eventPublishDate']) ? $eventDetails['eventPublishDate'] : '');
		$event->eventArchiveDate		= (isset($eventDetails['eventArchiveDate']) ? $eventDetails['eventArchiveDate'] : '');
		$event->created_at				= date('Y-m-d H:i:s');
		$event->updated_at				= date('Y-m-d H:i:s');

		if ($event->save())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public static function test()
	{
		echo "True";
	}
}