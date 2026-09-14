<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

JHtml::_('stylesheet', 'templates/aptx26/css/teaser.css');

$modId = 'mod-custom' . $module->id;
?>

<div id="<?php echo $modId; ?>" class="mod-custom custom">
    <a href="<?php echo JTEXT::_('MOD_CUSTOM_TEASER_REVIEWLINK'); ?>">
	<div class="jte-teaser jte-teaser-review">
		<div class="jte-teaser-content">
			<div class="h5"><?php echo JTEXT::_('MOD_CUSTOM_TEASER_REVIEWED_H'); ?></div>
			<div class="text"><?php echo JTEXT::_('MOD_CUSTOM_TEASER_REVIEWED_P'); ?></div>
		</div>
	</div>
	</a>
	<a href="<?php echo JTEXT::_('MOD_CUSTOM_TEASER_BOOKINGLINK'); ?>">
	<div class="jte-teaser jte-teaser-book">
		<div class="jte-teaser-content">
			<div class="h5"><?php echo JTEXT::_('MOD_CUSTOM_TEASER_BOOKCHEAP_H'); ?></div>
			<div class="text"><?php echo JTEXT::_('MOD_CUSTOM_TEASER_BOOKCHEAP_P'); ?></div>
		</div>
	</div>
	</a>
</div>
