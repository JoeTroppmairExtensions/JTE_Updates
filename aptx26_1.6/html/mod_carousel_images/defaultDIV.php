<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_carousel_images
 *
 * @copyright   (C) 2024 Joe Troppmair
 * @license     ...
 */

defined('_JEXEC') or die;
JHtml::_('bootstrap.carousel');

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

if (!count($images)) {
    echo Text::_('MOD_RANDOM_IMAGE_NO_IMAGES');

    return;
}
$sliderID = $params->get('sliderID', 'default');
$sliderStyle = $params->get('sliderStyle', 'default');
$sliderNavControl = $params->get('sliderNavControl', 'default');
$sliderIndicator = $params->get('sliderIndicator', 'default');
$sliderDarkControl = $params->get('sliderDarkControl', 'default');
$sliderCaptionControl = $params->get('sliderCaptionControl', 'default');

// Debug
#echo $folder;
# echo $type;
# echo $params->get('type', 'jpg');
#	<h3><?php echo JText::_('CAPTION_TITLE_' .strtoupper(pathinfo($item->name), PATHINFO_FILENAME). '.' .$params->get('type', 'jpg'). '');

# carousel-caption d-none d-md-block
?>

<div id="<?php echo $sliderID; ?>" class="carousel <?php echo $sliderStyle; ?> <?php echo $sliderDarkControl; ?>" data-bs-ride="carousel" data-bs-touch="true">
	
	<div class="carousel-inner">
		<?php for ($i = 0, $n = count($images); $i < $n; $i ++) : ?>
			<?php $item = $images[$i]; ?>
				<?php if ($i == 0){?>
					<div class="carousel-item <?php echo 'active';  ?>" >
						<!-- <?php #echo HTMLHelper::_('image', $item->folder . '/' . htmlspecialchars($item->name, ENT_COMPAT, 'UTF-8'), ''); ?> -->
						<div class="divbg" style="background-image:url('<?php echo $item->folder . '/' . htmlspecialchars($item->name, ENT_COMPAT, 'UTF-8'); ?>')"></div>
						<?php if ($sliderCaptionControl == 1) : ?>
							<div class="carousel-caption">
								<h3><?php echo JText::_('MOD_CAROUSEL_' .strtoupper($item->name). '_HX'); ?></h3>
								<p><?php echo JText::_('MOD_CAROUSEL_' .strtoupper($item->name). '_TX'); ?></p>
							</div>
						<?php endif; ?>
					</div>
				<?php } else { ?>
					<div class="carousel-item" >
						<!-- <?php #echo HTMLHelper::_('image', $item->folder . '/' . htmlspecialchars($item->name, ENT_COMPAT, 'UTF-8'), ''); ?> -->
						<div class="divbg" style="background-image:url('<?php echo $item->folder . '/' . htmlspecialchars($item->name, ENT_COMPAT, 'UTF-8'); ?>')"></div>
						<?php if ($n > 1 && $sliderCaptionControl == 1) : ?>
							<div class="carousel-caption">								
								<h3><?php echo JText::_('MOD_CAROUSEL_' .strtoupper($item->name). '_HX'); ?></h3>
								<p><?php echo JText::_('MOD_CAROUSEL_' .strtoupper($item->name). '_TX'); ?></p>
							</div>
						<?php endif; ?>
					</div>
				<?php } ?>
		<?php endfor; ?>
	</div>

	<?php if ($n > 1 && $sliderIndicator == 1) : ?>
		<div class="carousel-indicators">
		<?php for ($i = 0, $n = count($images); $i < $n; $i ++) : ?>
			<?php if ($i == 0){?>
			<button type="button" data-bs-target="#<?php echo $sliderID; ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<?php } else { ?>
			<button type="button" data-bs-target="#<?php echo $sliderID; ?>" data-bs-slide-to="<?php echo $i; ?>" aria-label="Slide 2"></button>
			<?php } ?>
		<?php endfor; ?>
		</div>
	<?php endif; ?>	

	<?php if ($n > 1 && $sliderNavControl == 1) : ?>
		<button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $sliderID; ?>" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#<?php echo $sliderID; ?>" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</button>
	<?php endif; ?>
</div>