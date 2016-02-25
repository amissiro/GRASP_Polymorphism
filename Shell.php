<?php

/**
 * Created by PhpStorm.
 * User: azretmissirov
 * Date: 2/18/16
 * Time: 3:47 PM
 */
class Shell
{
	const PRICE_PER_GALLON = 2.80;

	public function getFullPrice($gallons)
	{
		// TODO: Implement getFullPrice() method.
		return self::PRICE_PER_GALLON * $gallons;
	}

	public function getName()
	{
		return 'Shell';
	}
}