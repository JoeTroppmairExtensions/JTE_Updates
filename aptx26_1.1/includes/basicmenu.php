<?php defined('_JEXEC') or die; ?>

<?php if ( $this->countModules('menu') ) : ?>
<div id="jteMenu" class="container-fluid row sticky">
	<div id="offcanvasbutton" class="col-1">
		<button class="menuJTE" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
			<span class="menuWrapper">
				<span class="menuLine">&nbsp;</span>
				<span class="menuLine">&nbsp;</span>
				<span class="menuLine">&nbsp;</span>
			</span>
			<span class="menuText"><?php echo JText::_('TPL_MENU'); ?></span>
		</button>
	</div>
	<div id="menu" class="col-11">
		<jdoc:include type="modules" name="menu" style="html5" />
	</div>
</div>
<?php endif; ?>