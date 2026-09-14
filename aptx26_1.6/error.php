<?php

/**
 * @package     Joomla.Site
 * @subpackage  Templates.aptx26
 *
 * @copyright   (C) 2025 Joe Troppmair <https://www.troppmair.com>
 
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;

if (($this->error->getCode()) == '404') {
	header('Location: ' . JRoute::_("/", false));
exit;
}
?>