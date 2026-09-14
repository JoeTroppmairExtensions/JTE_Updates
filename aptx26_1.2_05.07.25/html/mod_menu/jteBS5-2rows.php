<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseScript('mod_menu', 'mod_menu/menu.min.js', [], ['type' => 'module']);

$id = '';

if ($tagId = $params->get('tag_id', '')) {
    $id = ' id="' . htmlspecialchars($tagId, ENT_QUOTES, 'UTF-8') . '"';
}

// The menu class is deprecated. Use mod-menu instead   moegliche Klassen zu <nav>: navbar-expand-lg bg-body-tertiary
?>

<div class="row">
<nav class="navbar bg-body-tertiary">
<div class="col-12 order-1 col-sm-6 order-md-0 col-md-6 grid-divider2">
	<div class="row">
		<div class="col-6" style="position: absolute; top: 3%; left: 1%;">
			<div id="bs5lg" class="d-none d-md-block"><jdoc:include type="modules" name="language" /></div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-8 col-md-12 d-flex mx-auto my-auto justify-content-center">
			<img src="images/logo/logo_grau.png" alt="Logo" class="logo-img mt-2 mt-md-0" />
		</div>
	</div>
</div>
<div class="col-12 col-md-6 d-flex mx-auto my-auto justify-content-center grid-divider1 mb-2 mb-md-0">
<ul<?php echo $id; ?> class="navbar-nav <?php echo $class_sfx; ?>">
<?php foreach ($list as $i => &$item) {
    $itemParams = $item->getParams();
    $class      = 'nav-item item-' . $item->id;

    if ($item->id == $default_id) {
        $class .= ' defaultmenu';
    }

    if ($item->id == $active_id || ($item->type === 'alias' && $itemParams->get('aliasoptions') == $active_id)) {
        $class .= ' current';
    }

    if (in_array($item->id, $path)) {
        $class .= ' active';
    } elseif ($item->type === 'alias') {
        $aliasToId = $itemParams->get('aliasoptions');

        if (count($path) > 0 && $aliasToId == $path[count($path) - 1]) {
            $class .= ' active';
        } elseif (in_array($aliasToId, $path)) {
            $class .= ' alias-parent-active';
        }
    }

    if ($item->type === 'separator') {
        $class .= ' divider';
    }
	
	if ($item->type === 'heading') {
        $class .= ' headingmenu';
    }

    if ($item->deeper) {
        $class .= ' deeper';
    }

    if ($item->parent) {
        $class .= ' parent';
    }

    echo '<li class="' . $class . '">';

    switch ($item->type) :
        case 'separator':
        case 'component':
        case 'heading':
        case 'url':
            require ModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
            break;

        default:
            require ModuleHelper::getLayoutPath('mod_menu', 'default_url');
            break;
    endswitch;

    // The next item is deeper.
#    if ($item->deeper) {
#        echo '<ul class="mod-menu__sub list-unstyled small">';
#    } elseif ($item->shallower) {
        // The next item is shallower.
        echo '</li>';
#        echo str_repeat('</ul></li>', $item->level_diff);
#   } else {
        // The next item is on the same level.
#        echo '</li>';
#    }
}
?></ul></div></nav></div>
