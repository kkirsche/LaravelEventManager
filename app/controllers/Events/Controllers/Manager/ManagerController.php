<?php

namespace Events\Controllers\Manager;

use \View, \BaseController, \Site, \CalendarEvent, \Input, \Validator;

class ManagerController extends BaseController
{
    //This control ensures the user is logged in before they can view any of the manager pages or use the manager actions
	public function __construct()
	{
		$this->beforeFilter('auth');
	}

    //This control gets the correct manager page and displays it
	public function getManager($nav = null)
	{
		if ($nav == null)
        {
            return View::make('manager');
        }
        else
        {
            return View::make('manager/'.$nav);
        }
	}

    //This control takes the site settings page when it is POSTed and moves it to the model to update the site settings.
    public function postSiteSettings()
    {
        $siteSettings = array(
            'siteTitle' => Input::get('siteTitle'),
            'siteAddress' => Input::get('siteAddress'),
            'adminEmail' => Input::get('adminEmail'),
            'openRegistrations' => Input::get('openRegistrations')
        );

        Site::postSiteSettings($siteSettings);

        return View::make('manager/settings');
    }

    public function postCreateEvent()
    {
        $eventDetails = array(
            'eventCalendar'         => Input::get('eventCalendar'),
            'eventName'             => Input::get('eventName'),
            'eventDescription'      => Input::get('eventDescription'),
            'eventCapacity'         => Input::get('eventCapacity'),
            'eventRegistrationType' => Input::get('eventRegistrationType'),
            'eventLocationName'     => Input::get('eventLocationName'),
            'eventLocationAddress1' => Input::get('eventLocationAddress1'),
            'eventLocationAddress2' => Input::get('eventLocationAddress2'),
            'eventLocationAddress3' => Input::get('eventLocationAddress3'),
            'eventLocationCity'     => Input::get('eventLocationCity'),
            'eventLocationState'    => Input::get('eventLocationState'),
            'eventLocationZIP'      => Input::get('eventLocationZIP'),
            'eventLocationCountry'  => Input::get('eventLocationCountry'),
            'eventLocationPhone'    => Input::get('eventLocationPhone'),
            'eventStartDate'        => Input::get('eventStartDate'),
            'eventEndDate'          => Input::get('eventEndDate'),
            'eventStartTime'        => Input::get('eventStartTime'),
            'eventEndTime'          => Input::get('eventEndTime'),
            'eventRSVPEndDate'      => Input::get('eventRSVPEndDate'),
            'eventPublishDate'      => Input::get('eventPublishDate'),
            'eventArchiveDate'      => Input::get('eventArchiveDate')
        );

        $rules = array(
            'eventName' => 'required',
            'eventDescription' => 'required',
            'eventCapacity' => 'integer',
            'eventLocationZIP' => 'integer',
            'eventStartDate' => 'date'
        );

        $v = Validator::make($eventDetails, $rules);

        if ($v->passes())
        {
            $event = new CalendarEvent;
            if ($event->postCreateEvent($eventDetails))
            {
                return View::make('manager/createEvent');
            }
            else
            {
                echo "WTF....";
            }
        }
        else
        {
            return View::make('manager/');
        }
    }
}