<?php
/**
 * @see http://php.net/manual/en/timezones.php
 * @see http://php.net/manual/en/class.datetime.php
 */

class WorldTime
{
	private $dt;
	
	public function __construct($timezone=null)
	{
		$this->dt = new DateTime();
		
		if(null != $timezone)
		{
			$this->time($timezone);
		}
	}
	
	public function getDateTime()
	{
		return $this->dt->format("Y-m-d H:i:s");
	}
	
	public function time($timezone)
	{
		$timezones = file(dirname(__FILE__)."/timezones.csv", FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);

		/**
		 * Case sensitive, because same input is passed on
		 * @todo Use time offset as well
		 */
		if(in_array($timezone, $timezones))
		{
			$this->dt->setTimezone(new DateTimeZone($timezone));
			
			return $this->dt;
		}
		else
		{
			throw new Exception("Timezone not found.");
		}
		
		return $this->dt;
	}
}
