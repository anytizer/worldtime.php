<?php
namespace tests;

require_once("vendor/autoload.php");

use world\WorldTime;

$now = (new WorldTime("Asia/Singapore"))->getDateTime();
echo $now;
