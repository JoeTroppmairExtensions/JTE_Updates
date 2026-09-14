<?php
/*------------------------------------------------------------------------
# von Joe Troppmair
# Website https://www.troppmair.com
-------------------------------------------------------------------------*/

// no direct access
	defined('_JEXEC') or die;
// Joomla Textklasse "Text::_('TPL_MENU');", wenn aus "JText::_('...');" notwendig
	#use Joomla\CMS\Language\Text;
// Bootstrap-Modul:
	JHtml::_('bootstrap.offcanvas');
	#JHtml::_('bootstrap.dropdown');

?>

<div class="offcanvas offcanvas-end w-fullwidth" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
  <div class="offcanvas-header">
	<h5 class="offcanvas-title" id="offcanvasMenuLabel"><?php echo JText::_('TPL_MENU'); ?></h5>
	<div class="d-md-none"><jdoc:include type="modules" name="language" /></div>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
	<jdoc:include type="modules" name="offcanvas" style="html5"/>
	
	<?php #include('cards.php'); ?>
	
	<jdoc:include type="modules" name="NO-menu" style="html5" />
	<jdoc:include type="modules" name="NO-footermenu" style="html5" />
  </div>
</div>