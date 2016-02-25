<?php

/**
 * Class GasStation
 */
abstract class GasStation
{
	/**
	 * Gets the full price for the specified number of gallons.
	 *
	 * @param float $gallons   The number of gallons.
	 *
	 * @return float   The full price.
	 */
	abstract function getFullPrice($gallons);

	/**
	 * The name of the gas station.
	 *
	 * @return null
	 */
	public function getName()
	{
		return null;
	}

}