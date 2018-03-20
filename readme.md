# worldtime.php

Current date/time in different timezones.


## Usage

	<?php
	require_once("vendor/autoload.php");

	use world\WorldTime;
	
	$now = (new WorldTime("Asia/Singapore"))->getDateTime();

Expect: **YYYY-MM-DD HH:II:SS** format value in that timezone.


## @todo

Support timezone calculation with HH:MM offset.


## See

 * [List of available timezones](http://php.net/manual/en/timezones.php)
 * Other - [Unused timezones](http://php.net/manual/en/timezones.others.php)
 * [Default Timezone Set/Get](http://php.net/manual/en/function.date-default-timezone-set.php)
