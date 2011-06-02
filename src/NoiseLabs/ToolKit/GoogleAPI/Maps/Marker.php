<?php
/**
 * This file is part of NoiseLabs-PHP-ToolKit
 *
 * NoiseLabs-PHP-ToolKit is free software; you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * NoiseLabs-PHP-ToolKit is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with NoiseLabs-PHP-ToolKit; if not, see
 * <http://www.gnu.org/licenses/>.
 *
 * Copyright (C) 2011 Vítor Brandão
 *
 * @category NoiseLabs
 * @package GoogleAPI
 * @author Vítor Brandão <noisebleed@noiselabs.org>
 * @copyright (C) 2011 Vítor Brandão <noisebleed@noiselabs.org>
 * @license http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL-3
 * @link http://www.noiselabs.org
 * @since 0.1.0
 */

namespace NoiseLabs\ToolKit\GoogleAPI\Maps;

use NoiseLabs\ToolKit\GoogleAPI\ParameterBag;

class Marker
{
	protected $latitude;
    protected $longitude;

    /**
	 * Marker options.
	 *
	 * Known keys:
	 *  - icon: 	An icon to show in place of the default icon
	 *  - title:
	 *
	 * @var \NoiseLabs\ToolKit\ParameterBag
	 */
	public $options;

	public function __construct()
	{
		$this->options = new ParameterBag();
	}

    public static function create($latitude, $longitude, array $options = array())
    {
		$marker = new static();
		$marker->setLatitude($latitude);
		$marker->setLongitude($longitude);
		$marker->options->add($options);

		return $marker;
	}

	public function setLatitude($latitude)
	{
		$this->latitude = (float) $latitude;
	}

	public function getLatitude()
	{
		return $this->latitude;
	}

	public function setLongitude($longitude)
	{
		$this->longitude = (float) $longitude;
	}

	public function getLongitude()
	{
		return $this->longitude;
	}
}

?>

