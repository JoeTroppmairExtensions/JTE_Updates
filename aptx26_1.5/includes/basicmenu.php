<?php defined('_JEXEC') or die; ?>

<?php if ( $this->countModules('menu') ) : ?>
<div id="jteMenu" class="container-fluid row sticky">
	<div id="offcanvasbutton" class="col-3 col-sm-2 col-md-1 my-auto">
		<button class="menuJTE" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
			<span class="menuWrapper">
				<span class="menuLine">&nbsp;</span>
				<span class="menuLine">&nbsp;</span>
				<span class="menuLine">&nbsp;</span>
			</span>
			<span class="menuText"><?php echo JText::_('TPL_MENU'); ?></span>
		</button>
	</div>
	<div id="menu" class="col-9 col-sm-10 col-md-11">
		<jdoc:include type="modules" name="menu" style="html5" />
	</div>
</div>
<?php endif; ?>