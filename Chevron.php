<?php

/**
 * Created by PhpStorm.
 * User: azretmissirov
 * Date: 2/18/16
 * Time: 3:43 PM
 */
class Chevron extends  GasStation
{
	const PRICE_PER_GALLON = 2.69;

	const CREDIT_CARD_FEE = 1.02;

	public function getFullPrice($gallons)
	{
		// TODO: Implement getFullPrice() method.
		return self::PRICE_PER_GALLON * $gallons * self::CREDIT_CARD_FEE;
	}

	public function getName()
	{
		return 'Chevron';
	}
}