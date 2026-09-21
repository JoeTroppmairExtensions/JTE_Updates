<b class="screen-overlay"></b>

<!-- offcanvas panel -->
<aside class="offcanvas" id="my_offcanvas1">
	<header class="p-4 bg-light border-bottom">
		<button class="btn btn-outline-danger btn-close"> &times Close </button>
		<h6 class="mb-0">First offcanvas </h6>
	</header>
	<nav class="list-group list-group-flush">
    <a href="#" class="list-group-item">Home</a>
    <a href="#" class="list-group-item">About us</a>
    <a href="#" class="list-group-item">Menu name 1</a>
    <a href="#" class="list-group-item">Menu name 2</a>
    <a href="#" class="list-group-item">Menu name 3</a>
	</nav>
</aside>
<!-- offcanvas panel .end -->

<!-- offcanvas panel right -->
<aside class="offcanvas offcanvas-right" id="my_offcanvas2">
  
  <header class="p-4 bg-light border-bottom">

	<button class="btn btn-outline-secondary btn-close"> &times <?php echo JTEXT::_('TPL_JOE_OFFCANVASMENU_CLOSE');?> </button>
    <h6 class="mb-0"><a href="/"><img src="/images/icons/neuwirt_n.png" alt="<?php echo JTEXT::_('MENUNAME');?>"></a></h6>
	    
  </header>
  <div class="row">
   <div class="col-9"></div>
   <div class="col-2 offset-1">
	<jdoc:include type="modules" name="topbar-right" title="Sprachwahl" />
   </div>
  </div>
  <nav class="list-group list-group-flush">
	<jdoc:include type="modules" name="off-canvas-2" style=""/>
	<jdoc:include type="modules" name="off-canvas-1" style=""/>
	<jdoc:include type="modules" name="off-canvas-4" style=""/>
	<jdoc:include type="modules" name="off-canvas-3" style=""/>
  </nav>
</aside>
<!-- offcanvas panel right .end -->