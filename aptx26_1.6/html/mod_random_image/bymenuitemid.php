<?php
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Factory;

// JTE
$app = Factory::getApplication();
$sitemenu = $app->getMenu();

if ($activeMenuitem = $sitemenu->getActive()) {
	$menuID = $activeMenuitem->id;
}

// Joomla
if (!count($images))
{
  echo Text::_('MOD_RANDOM_IMAGE_NO_IMAGES');
  return;
}


/* Bilder-Sammlung durchlaufen bis eines gefunden wird, bei dem sich ermittelte MenueID im Bildnamen befindet. */
foreach ($images as $img) {
 if (strpos($img->name, $menuID) !== false) {
	$image = $img;
	break;
 } else {
	$image->name = "default.jpg";
 }
}

// TEST
#echo $menuID . "<br>";
#echo $image->name . "<br>";
#print_r($img);
?>
<?php if ($link) : ?>
<a href="<?php echo htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
    <div class="flexheader" style="background-image:url('<?php echo $image->folder . '/' . htmlspecialchars($image->name, ENT_COMPAT, 'UTF-8'); ?>')"></div>
<?php if ($link) : ?>
</a>
<?php endif; ?>