<?php
namespace test;

#require_once("../src/world/WordlTime.php");
require_once("./vendor/autoload.php");

use world\WorldTime;

/**
 * Current time in default timezone
 */
echo "\r\n", $now = (new WorldTime())->getDateTime();

/**
 * Current time in specific timezone
 */
echo "\r\n", $now = (new WorldTime("Asia/Singapore"))->getDateTime();

/**
 * Current time in another timezone
 */
echo "\r\n", $now = (new WorldTime("Europe/Dublin"))->getDateTime();

/**
 * Back on: Current time in default timezone
 */
echo "\r\n", $now = (new WorldTime())->getDateTime();

/**
 * Experimental
 */
# $wt = new WorldTime("Asia/Kathmandu");
# $date = $wt->time("America/Toronto");
# echo "\r\n", $date->format("Y-m-d H:i:s");
