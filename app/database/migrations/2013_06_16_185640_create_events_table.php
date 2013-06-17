<?php

use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($table)
	    {
	        $table->increments('id');
	        $table->integer('eventCalendar');
	        $table->string('eventName');
	        $table->text('eventDescription');
	        $table->integer('eventCapacity');
	        $table->integer('eventRegistrationType');
	        $table->string('eventLocationName');
	        $table->string('eventLocationAddress1');
	        $table->string('eventLocationAddress2');
	        $table->string('eventLocationAddress3');
	        $table->string('eventLocationCity');
	        $table->string('eventLocationState');
	        $table->string('eventLocationZIP');
	        $table->string('eventLocationCountry');
	        $table->string('eventLocationPhone');
	        $table->date('eventStartDate');
	        $table->date('eventEndDate');
	        $table->time('eventStartTime');
	        $table->time('eventEndTime');
	        $table->date('eventRSVPEndDate');
	        $table->date('eventPublishDate');
	        $table->date('eventArchiveDate');
	        $table->timestamps();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}