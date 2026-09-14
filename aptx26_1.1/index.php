<?php
/*------------------------------------------------------------------------
# von Joe Troppmair
# Website https://www.troppmair.com
-------------------------------------------------------------------------*/

// no direct access
	defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<?php
	include 'includes/head.php';
?>
<body>
	<jdoc:include type="message" />
<?php
	include 'includes/basicmenu.php';
	include 'includes/offcanvas.php';
	include 'includes/topbar.php';
	include 'includes/content.php';
	include 'includes/showcase.php';
	include 'includes/footer.php';
?>
	<jdoc:include type="modules" name="debug" style="none" />

</body>
</html>