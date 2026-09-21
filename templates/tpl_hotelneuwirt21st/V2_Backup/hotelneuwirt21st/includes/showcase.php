<!-- ***** SCHAUKASTEN ***** -->

<?php defined('_JEXEC') or die; ?>

<?php #if ( $this->countModules('teaser') == "1" ) : ?>
	<div id="showcase" class="d-none d-lg-block">
		<div  class="container">
			<div  class="row">
				<div class="showcase-logo col-lg-4 col-xl-4"></div>
				<div class="showcase-right col-12 col-sm-6 col-md-6 col-lg-8 col-xl-8">
					<jdoc:include type="modules" name="teaser" style="xhtml"/>
				</div>
			</div>
		</div>
	</div>
<?php #endif; ?>