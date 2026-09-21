<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JHtml::_('bootstrap.carousel');
?>
<div id="fadeBS5carousel" class="carousel slide carousel-fade newsflash<?php echo $moduleclass_sfx; ?>" data-bs-ride="carousel">
	<div class="carousel-inner">
		<?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
			<?php $item = $list[$i]; ?>
				<?php if ($i == 0){?>
					<div class="carousel-item <?php echo 'active';  ?>" >
						<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_itemBootstrapSlider'); ?>
					</div>
				<?php } else { ?>
					<div class="carousel-item" >
						<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_itemBootstrapSlider'); ?>
					</div>
				<?php }  
				

				?>
		<?php endfor; ?>
	</div>

	<?php if ($n > 1) : ?>
		<button class="carousel-control-prev" type="button" data-bs-target="#fadeBS5carousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#fadeBS5carousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</button>
	<?php endif; ?>
</div>
