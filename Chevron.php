<?php

/**
 * Class Chevron
 */
class Chevron extends  GasStation
{
	/**
	 * Price per gallon
	 */
	const PRICE_PER_GALLON = 2.69;

	/**
	 * Credit card fee
	 */
	const CREDIT_CARD_FEE = 1.02;

	/**
	 * Gets the full price for specified number of gallons.
	 *
	 * @param float $gallons   The number of gallons.
	 *
	 * @return float   The full price.
	 */
	public function getFullPrice($gallons)
	{
		// TODO: Implement getFullPrice() method.
		return self::PRICE_PER_GALLON * $gallons * self::CREDIT_CARD_FEE;
	}

	/**
	 * Gets the gas station name.
	 *
	 * @return string   The gas station name
	 */
	public function getName()
	{
		return 'Chevron';
	}
}