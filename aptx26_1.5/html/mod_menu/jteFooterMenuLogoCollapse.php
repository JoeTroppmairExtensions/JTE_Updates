<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   (C) 2024 Joe Troppmair <https://www.troppmair.com>
 * 
 */

defined('_JEXEC') or die;
use Joomla\CMS\Helper\ModuleHelper;
JHtml::_('bootstrap.dropdown');
JHtml::_('bootstrap.collapse');

$id = '';

if ($tagId = $params->get('tag_id', '')) {
    $id = ' id="' . $tagId . '"';
}
?>
<nav<?php echo $id; ?> class="navbar <?php echo $class_sfx; ?>">
<div class="container">
<img src="images/logo/logo_transparent_467x199.png" alt="Logo" class="footermenu-image d-inline-block align-text-top" />
<?php if($module->showtitle): ?>
	<a class="navbar-brand" href="/">
		<?php echo htmlspecialchars($module->title, ENT_QUOTES, 'UTF-8'); ?>
	</a>
<?php endif; ?>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar<?php echo $module->id; ?>" aria-controls="navbar<?php echo $module->id; ?>" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse navbar-toggler-right" id="navbar<?php echo $module->id; ?>">

<ul class="navbar-nav">
<?php foreach ($list as $i => &$item) {
    $itemParams = $item->getParams();
    $class      = 'nav-item item-' . $item->id;
// Ende Joes Aenderungen -->

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
        $class .= ' parent dropdown';
    }

    echo '<li class="' . $class . '">';

    switch ($item->type) :
        case 'separator':
        case 'component':
        case 'heading':
		case 'url':
		case 'alias':
        // Original
		#    require ModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
        // Ende Original
#		echo "<pre>".print_r ($item,1)."</pre>"; // Debug
			$a_class = $itemParams->get('menu-anchor_css'); 	// OrganicWebs Bootstrap 5		
			if ($item->current) $a_class .= " active"; 			// OrganicWebs Bootstrap 5	
			
			if ($item->parent) {
				// Dropdown Parent menu
				echo "<a class='nav-link dropdown-toggle' href='/$item->route' role='button' data-bs-toggle='dropdown' aria-expanded='false'> $item->title</a>"; // OrganicWebs Bootstrap 5
			}
			elseif ($item->level > 1) {
				// Menu Link in a dropdown	
				echo "<a class='dropdown-item $a_class ' href='/$item->route' > $item->title </a>"; // OrganicWebs Bootstrap 5 
			}
			else {
				// Standard Menu Link
				echo "<a class='nav-link $a_class ' href='/$item->route' > $item->title </a>"; // OrganicWebs Bootstrap 5 
			}
			break;

        default:
            require ModuleHelper::getLayoutPath('mod_menu', 'default_url');
			#echo "<a class='nav-link $a_class ' href='/$item->route' > $item->title </a>"; // OrganicWebs Bootstrap 5 
            break;
    endswitch;

    // The next item is deeper.
    if ($item->deeper) {
        echo '<ul class="mod-menu__sub dropdown-menu list-unstyled small">';
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

<!-- Joes Aenderungen -->
</div>
</div>
</nav>
<!-- Ende Joes Aenderungen -->