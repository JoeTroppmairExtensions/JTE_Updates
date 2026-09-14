<?php
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Factory;

if (!count($images))
{
  echo Text::_('MOD_RANDOM_IMAGE_NO_IMAGES');
  return;
}

// Wunsch-Format. z.B. hier Jahr, Monat, Tag
$comparisonFormat = 'Ymd';

// Das heutige Datum wie oben formatiert; z.B. 20160106 am 6.1.2016
$now = Factory::getDate(time(), 'UTC');
$now = $now->format($comparisonFormat);

/* Bilder-Sammlung durchlaufen bis eines gefunden wird, bei dem sich ermitteltes
Datumsformat am Anfang des Bildnamen befindet. */
foreach ($images as $img)
{
 if (strpos($img->name, $now) === 0)
 {
  $image = $img;
  break;
 }
}
?>
<div class="mod-randomimage random-image">
<?php if ($link) : ?>
<a href="/<?php echo htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
  <?php echo HTMLHelper::_('image', $image->folder . '/'
    . htmlspecialchars($image->name, ENT_COMPAT, 'UTF-8'), '',
    ['width' => $image->width, 'height' => $image->height]); ?>
<?php if ($link) : ?>
</a>
<?php endif; ?>
</div>