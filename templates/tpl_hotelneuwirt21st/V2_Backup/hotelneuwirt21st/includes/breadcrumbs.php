<!-- ***** BROTKRUMEN ***** -->

<?php defined('_JEXEC') or die; ?>

<?php if($this->countModules('breadcrumbs')) : ?>
	<div id="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="">
					<jdoc:include type="modules" name="breadcrumbs" />
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>