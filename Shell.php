<?php

/**
 * Class Shell
 */
class Shell extends GasStation
{
	/**
	 * Price per gallon
	 */
	const PRICE_PER_GALLON = 2.80;

	/**
	 * Gets the full price for specified number of gallons.
	 *
	 * @param float $gallons   The number of gallons.
	 *
	 * @return float   The full price.
	 */
	public function getFullPrice($gallons)
	{
		return self::PRICE_PER_GALLON * $gallons;
	}

	/**
	 * Gets the gas station name.
	 *
	 * @return string   The gas station name
	 */
	public function getName()
	{
		return 'Shell';
	}
}