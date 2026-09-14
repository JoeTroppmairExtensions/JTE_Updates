<?php
 /**
  * https://ghsvs.de/programmierer-schnipsel/joomla/315-joomla-modul-override-fuer-einbinden-eigener-codes
  */

defined('_JEXEC') or die;
  
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

$modId = 'mod-custom' . $module->id;
$aktuellerSeitenPfad = JUri::getInstance()->getPath();
?>
<div id="<?php echo $modId; ?>" style="display: flex; justify-content: center;">
	<!-- <button id="toLast" class="myBtn btn btn-secondary">Scroll to #content</button>
	<button id="toMiddle" class="btn btn-primary">Scroll to Top</button> -->

<div id="toContent" class="chevronDown pulse">
<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
  <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
</svg>
</div>


</div>

<script>
	scrollTo = (element) => {
	  window.scroll({
		behavior: 'smooth',
		left: 0,
		top: element.offsetTop
	  });
	 // console
	}

	document.getElementById("toContent").addEventListener('click', () => {
	  scrollTo(document.getElementById("jteContent"));
	});

	//document.getElementById("toMiddle").addEventListener('click', () => {
	//  scrollTo(document.getElementById("system-message-container"));
	//});
</script>