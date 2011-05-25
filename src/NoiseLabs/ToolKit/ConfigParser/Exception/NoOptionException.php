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

namespace NoiseLabs\ToolKit\ConfigParser\Exception;

class NoOptionException extends \RuntimeException
{
	public function __construct($section, $option)
	{
		parent::__construct("Option '".$option."' on section '".$section."' doesn't exist");
	}
}

?>