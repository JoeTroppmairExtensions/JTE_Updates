<!-- ***** TOPBAR ***** -->

<?php defined('_JEXEC') or die; ?>

<div id="topbar">
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<!--<nav class="navbar navbar-expand navbar-light bg-light"-->
				<nav class="navbar navbar-expand">
					<jdoc:include type="modules" name="topbar" />
					<a href="#" class="text_off_link d-none d-lg-block"><img id="bildwechsel" alt="Text OFF" src="templates/<?php echo $this->template; ?>/images/text_off.png" /></a>
					<div class="d-none d-lg-block">
						<jdoc:include type="modules" name="topbar-right" />
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>