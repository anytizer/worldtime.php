<?php
namespace test;

require_once("vendor/autoload.php");

use world\WorldTime;

$timezones = array(
	null,
	"Asia/Singapore",
	"Europe/Dublin",
	"Asia/Kathmandu",
	null,
);

foreach($timezones as $timezone)
{
	echo "\r\n", $now = (new WorldTime($timezone))->getDateTime();
	echo " - ", $timezone;
}
