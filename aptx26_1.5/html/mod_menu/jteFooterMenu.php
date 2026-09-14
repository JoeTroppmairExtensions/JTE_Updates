<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   (C) 2025 JTE
 *
 */

defined('_JEXEC') or die;
use Joomla\CMS\Helper\ModuleHelper;
#JHtml::_('bootstrap.dropdown');
#JHtml::_('bootstrap.collapse');

$id = '';

if ($tagId = $params->get('tag_id', '')) {
    $id = ' id="' . htmlspecialchars($tagId, ENT_QUOTES, 'UTF-8') . '"';
}
?>
<nav<?php echo $id; ?> class="navbar <?php echo $class_sfx; ?>">
<div class="container">

<?php if($module->showtitle): ?>
	<a class="navbar-brand" href="/">
		<?php echo htmlspecialchars($module->title, ENT_QUOTES, 'UTF-8'); ?>
	</a>
<?php endif; ?>

<ul class="navbar-nav d-flex justify-content-center flex-row flex-wrap text-center">
<?php foreach ($list as $i => &$item) {
    $itemParams = $item->getParams();
    $class      = 'nav-item col-12 col-sm-auto item-' . $item->id;

    if ($item->id == $default_id) {
        $class .= ' default';
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
    if ($item->deeper) {
        echo '<ul class="mod-menu__sub list-unstyled small">';
    } elseif ($item->shallower) {
        // The next item is shallower.
        echo '</li>';
        echo str_repeat('</ul></li>', $item->level_diff);
    } else {
        // The next item is on the same level.
        echo '</li>';
    }
}
?></ul>
</div>
</nav>