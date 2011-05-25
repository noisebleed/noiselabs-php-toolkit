<?php
/**
 * @category NoiseLabs
 * @package ConfigParser
 * @version 0.1.0
 * @author Vítor Brandão <noisebleed@noiselabs.org>
 * @copyright (C) 2011 Vítor Brandão <noisebleed@noiselabs.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NoiseLabs\ToolKit\ConfigParser;

use NoiseLabs\ToolKit\ConfigParser\File;

/**
 * This class is a version of the ConfigParser class meant to be used for
 * configuration files that don't have sections.
 *
 * @author Vítor Brandão <noisebleed@noiselabs.org>
 */
class NoSectionsConfigParser extends BaseConfigParser implements NoSectionsConfigParserInterface
{
	const HAS_SECTIONS		= false;

	/**
	 * Return a list of options available
	 */
	public function options()
	{
		return array_keys($this->_data);
	}

	/**
	 * If the given option exists, return TRUE; otherwise return FALSE.
	 */
	public function hasOption($option)
	{
		return isset($this->data[$option]);
	}
}