<!-- ***** TEASER ***** -->

<?php defined('_JEXEC') or die; ?>

<?php #if ( $this->countModules('rd-teaser') == "1" ) : ?>
	<div id="teaser">
		<div class="container">
			<div  class="row">
				<div class="teaser-right col-md-3 offset-md-9">
					<jdoc:include type="modules" name="rd-teaser" style="xhtml"/>
				</div>
			</div>
		</div>
	</div>
<?php #endif; ?>