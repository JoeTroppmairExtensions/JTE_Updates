<?php defined('_JEXEC') or die; ?>

<?php if ( $this->countModules('startslider') ) : ?>
	<div id="jteSlider"><jdoc:include type="modules" name="startslider" style="html5" /></div>
	
<?php else: ?>
	<div id="jteFlex"><jdoc:include type="modules" name="flexheadertop" style="html5" /></div>
<?php endif; ?>