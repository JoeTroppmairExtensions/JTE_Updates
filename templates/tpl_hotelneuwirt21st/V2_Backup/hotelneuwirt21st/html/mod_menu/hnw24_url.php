<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.

$anchor_css = $item->anchor_css;
if (preg_match_all("/(fa-[-a-z0-9]+)/", $anchor_css, $fa)){ //look for a font awsome class name beginning with fa- if found the lass name is stored in $out[0][0]
    $anchor_css = preg_replace("/(fa-[-a-z0-9]+)/", "", $anchor_css);   //remove the font awsome class name starting with fa-
    $anchor_css = preg_replace("/fa/", "", $anchor_css);    //remove the fa prefix from the class
    $anchor_css = preg_replace('!\s+!', ' ', $anchor_css);  //remove multiple spaces and replace with a single space
    $anchor_css = trim($anchor_css);    //remove leading/trailing spaces
}
$fa_icon = $fa[0][0] ? '<i class="fa '.implode(' ',$fa[0]).'" ></i>' :'';   //if a font awsome class name exists, create an <i></i> tag

$class = $anchor_css ? 'class="' . $anchor_css . '" ' : '';
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';
										  
 

if ($item->menu_image)
	{
		$item->params->get('menu_text', 1) ?
		$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" /><span class="image-title">' . $item->title . '</span> ' :
		$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
						 

					  
{
						   
  
													 
	$linktype = $item->title;
  
	 
  
																 
  

										
  
																	   
  
}

$flink = $item->flink;
$flink = JFilterOutput::ampReplace(htmlspecialchars($flink));
								  
											

									 
  
									
  
 
switch ($item->browserNav)
{
    default:
    case 0:
        ?>
        <a <?php echo $class; ?>href="<?php echo $item->flink; ?>"<?php $title; ?>> <?php echo $fa_icon ?> <?php echo $linktype; ?></a>
        <?php
        break;
    case 1:
        // _blank
        ?>
        <a <?php echo $class; ?>href="<?php echo $item->flink; ?>" target="_blank" <?php echo $title; ?>><?php echo $fa_icon ?> <?php echo $linktype; ?></a>
        <?php
        break;
    case 2:
    // Use JavaScript "window.open"
        ?>
        <a <?php echo $class; ?>href="<?php echo $item->flink; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>>  <?php echo $fa_icon ?> <?php echo $linktype; ?></a>
        <?php
        break;
}

																																	 
