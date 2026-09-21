<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
use Joomla\CMS\Helper\ModuleHelper;

if (!$list) {
    return;
}
$urls = json_decode($item->urls);
	if (!empty($urls->urla) && !empty($urls->urlatext)) :
		$link = $urls->urla;
		$linkText = $urls->urlatext;
	endif;
?>

<?php
 if ($params->get('img_intro_full') !== 'none' && !empty($item->imageSrc) && $params->get('show_introtext', 1)) : ?>	
<div class="row newsflash">
	<div class="col-4">
		<figure class="newsflash-image">
			<a href="<?php echo $link; ?>"><img src="<?php echo $item->imageSrc; ?>" alt="<?php echo $item->imageAlt; ?>" width="150"></a>
			<?php if (!empty($item->imageCaption)) : ?>
				<figcaption>
					<?php echo $item->imageCaption; ?>
				</figcaption>
			<?php endif; ?>
		</figure>
	</div>
	<div class="col-4">
		<?php if ($params->get('item_title')) : ?>
			<?php $item_heading = $params->get('item_heading', 'h4'); ?>
			<<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php if ($link !== '' && $params->get('link_titles')) : ?>
				<a href="<?php echo $link; ?>">
					<?php echo $item->title; ?>
				</a>
			<?php else : ?>
				<?php echo $item->title; ?>
			<?php endif; ?>
			</<?php echo $item_heading; ?>>
		<?php endif; ?>	

		<?php echo $item->introtext; ?>
	</div>
	<div class="flying-button">
		<?php if (isset($link) && $item->readmore != 0 && $params->get('readmore')) : ?>
			<div align="center" style="clear: both;">
				<?php echo '<a class="btn btn-info btn-sm" href="' . $link . '" role="button">' . $linkText . '</a>'; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>