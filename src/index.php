<?php
require_once("class.WordlTime.inc.php");

/**
 * Current time in default timezone
 */
echo "\r\n", $now = (new WorldTime())->getDateTime();

/**
 * Current time in specific timezone
 */
echo "\r\n", $now = (new WorldTime("Asia/Singapore"))->getDateTime();

/**
 * Experimental
 */
// $wt = new WorldTime("Asia/Kathmandu");
// $date = $wt->time("America/Toronto");
// echo "\r\n", $date->format("Y-m-d H:i:s");
