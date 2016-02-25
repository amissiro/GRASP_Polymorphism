<?php

/**
 * Created by PhpStorm.
 * User: azretmissirov
 * Date: 2/18/16
 * Time: 3:40 PM
 */
abstract class GasStation
{
	abstract function getFullPrice($gallons);

	public function getName()
	{
		return null;
	}

}