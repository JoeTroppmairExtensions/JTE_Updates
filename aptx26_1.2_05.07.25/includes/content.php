<?php defined('_JEXEC') or die; ?>
<div id="jteContent" class="slideanim">
  <div class="container<?php echo $fluidgrid; ?>">
	<div class="row">
	
	<?php // mit LINKER und RECHTER Modulspalte
		if ( $this->countModules('left') && $this->countModules('right')) : ?>
			
		<div class="col-12
					col-sm-6
					col-md-6
					col-lg-<?php echo $leftcolgrid; ?>
					col-xl-<?php echo $leftcolgrid; ?>
					col-xxl-<?php echo $leftcolgrid; ?>
					order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1 order-xxl-1
					">
			<jdoc:include type="modules" name="left" style="html5" />
		</div>
		<div class="col-12
					col-sm-12
					col-md-12
					col-lg-<?php echo 12-$leftcolgrid-$rightcolgrid; ?>
					col-xl-<?php echo 12-$leftcolgrid-$rightcolgrid; ?>
					col-xxl-<?php echo 12-$leftcolgrid-$rightcolgrid; ?>
					order-1 order-sm-1 order-md-1 order-lg-2 order-xl-2 order-xxl-2
					">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
		<div class="col-12
					col-sm-6
					col-md-6
					col-lg-<?php echo $rightcolgrid; ?>
					col-xl-<?php echo $rightcolgrid; ?>
					col-xxl-<?php echo $rightcolgrid; ?>
					order-3 order-sm-3 order-md-3 order-lg-3 order-xl-3 order-xxl-3
					">
			<jdoc:include type="modules" name="right" style="html5" />
		</div>
			
	<?php // nur LINKE Modulspalte, "!" vor RECHTS in if()
		elseif ( $this->countModules('left') && !$this->countModules('right') ) : ?>
		
		<div class="col-12
					col-sm-12
					col-md-12
					col-lg-<?php echo $leftcolgrid; ?>
					col-xl-<?php echo $leftcolgrid; ?>
					col-xxl-<?php echo $leftcolgrid; ?>
					order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1 order-xxl-1
					">
			<jdoc:include type="modules" name="left" style="html5" /></div>
		<div class="col-12
					col-sm-12
					col-md-12
					col-lg-<?php echo 12-$leftcolgrid; ?>
					col-xl-<?php echo 12-$leftcolgrid; ?>
					col-xxl-<?php echo 12-$leftcolgrid; ?>
					order-1 order-sm-1 order-md-1 order-lg-2 order-xl-2 order-xxl-2
					">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
					
	<?php // nur RECHTE Modulspalte, "!" vor LINKS in if()
		elseif ( !$this->countModules('left') && $this->countModules('right') ) : ?>
				
		<div class="col-12
					col-sm-12
					col-md-12
					col-lg-<?php echo 12-$rightcolgrid; ?>
					col-xl-<?php echo 12-$rightcolgrid; ?>
					col-xxl-<?php echo 12-$rightcolgrid; ?>
					">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
		<div class="col-12
					col-sm-12
					col-md-12
					col-lg-<?php echo $rightcolgrid; ?>
					col-xl-<?php echo $rightcolgrid; ?>
					col-xxl-<?php echo $rightcolgrid; ?>
					">
			<jdoc:include type="modules" name="right" style="html5" />
		</div>
				  
	<?php // keine Modulspalten
		else : ?>
			 
		<div class="col">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
				
	<?php endif ; ?>

	</div>
  </div>
</div>

<div id="jteFlex"><jdoc:include type="modules" name="flexheadercontent" style="html5" /></div>