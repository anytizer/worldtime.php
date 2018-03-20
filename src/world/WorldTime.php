<?php
namespace world;

use \DateTime;
use \DateTimeZone;

/**
 * @see http://php.net/manual/en/timezones.php
 * @see http://php.net/manual/en/class.datetime.php
 */

class WorldTime
{
	private $datetime;
	
	public function __construct($timezone=null)
	{
		$this->datetime = new DateTime();
		
		if(null != $timezone)
		{
			$this->setTime($timezone);
		}
	}
	
	public function getDateTime()
	{
		return $this->datetime->format("Y-m-d H:i:s");
	}
	
	/**
	 * Sets a valid TimeZone
	 */
	private function setTime($timezone): DateTime
	{
		/**
		 * TimeZone is obtained from list of supported timezones in Manual.
		 * @see http://php.net/timezones
		 */
		$timezones = file(dirname(__FILE__)."/timezones.csv", FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

		/**
		 * Case sensitive, because same input is passed on
		 * @todo Use time offset as well
		 */
		if(in_array($timezone, $timezones))
		{
			$this->datetime->setTimezone(new DateTimeZone($timezone));
			
			return $this->datetime;
		}
		else
		{
			throw new Exception("Timezone not found.");
		}
		
		return $this->datetime;
	}
}
