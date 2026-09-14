<?php defined('_JEXEC') or die; ?>

<div id="jteFooter">
	<div class="container<?php echo $fluidgrid; ?>">
		<div class="row">
	<?php // mit LINKER und RECHTER Modulspalte
		if ( $this->countModules('footer') && $this->countModules('footermenu')) : ?>
			<div class="col-12 
						col-sm-12
						col-md-12
						col-lg-12
						col-xl-<?php echo $footercolgrid; ?>
						col-xxl-<?php echo $footercolgrid; ?>">
				<jdoc:include type="modules" name="footer" style="html5" />
			</div>
			<div class="col-12 
						col-sm-12
						col-md-12
						col-lg-12
						col-xl-<?php echo 12-$footercolgrid; ?>
						col-xxl-<?php echo 12-$footercolgrid; ?>">
				<jdoc:include type="modules" name="footermenu" style="html5" />
			</div>
	<?php elseif ( $this->countModules('footer') && !$this->countModules('footermenu') ) : ?>
			<div class="col-12">
				<jdoc:include type="modules" name="footer" style="html5" />
			</div>
	<?php endif; ?>	
		</div>
	</div>
</div>