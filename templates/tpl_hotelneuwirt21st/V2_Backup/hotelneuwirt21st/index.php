<?php
/*------------------------------------------------------------------------
# von Joe Troppmair
# Website https://www.troppmair.com
# wie Bootstrap eingebunden werden sollte: https://gist.github.com/dgrammatiko/efb3de4aa7cab4813a244f93f73cc0fd#carousel
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die;
include 'includes/params.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
<!-- TRUENDO Privacy Center -->
<script id="truendoAutoBlock" type="text/javascript" src="https://cdn.priv.center/pc/truendo_cmp.pid.js" data-siteid="db2b34ac-b44b-4006-b442-fecffed9d85b"></script>
<!-- End TRUENDO Privacy Center -->
	<jdoc:include type="head" />
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
</head>

<body>

<div id="body">
	<?php
		include 'includes/background.php';
		include 'includes/breadcrumbs.php';
		include 'includes/topbar.php';
		include 'includes/off-canvas.php';
		include 'includes/sidebar.php';
		#####include 'includes/navigation.php';
	?>

	<div id="text_off" class="container">
	<?php
		include 'includes/teaser.php';
		include 'includes/showcase.php';
		include 'includes/content.php';
		include 'includes/footer.php';
	?>
	</div>
</div>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>