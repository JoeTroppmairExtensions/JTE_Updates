<?php
 /**
  * Joe Troppmair ohne jQuery!
  * https://stackoverflow.com/questions/69534538/bootstrap-5-modal-open-on-page-load
  * ohne Button
	<!-- Button trigger modal
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $modId; ?>">
		Launch demo modal
	</button> -->
  * Alternativ Zeile 28: var myModal = new bootstrap.Modal(document.getElementById('myModal'), {}); myModal.toggle()	
  */

defined('_JEXEC') or die;
// Bootstrap-Modul:
	JHtml::_('bootstrap.modal');
	JHtml::_('bootstrap.collapse');
  
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

/*	$lang = JFactory::getLanguage();
	$sprache = $lang->getTag();	
	if ($sprache == "de-DE" OR $sprache == "de-AT") {
		$lang = "de";
	}
	elseif ($sprache == "pl-PL") {
		$lang = "pl";
	}
	elseif ($sprache == "en-GB") {
		$lang = "en";
	}
	Einsetzen in JS unten: <?php echo $lang; ?>*/

$modId = 'modal' . $module->id;

if(!isset($_COOKIE['cc-show'])) :
?>
	<script>
		function Consenty() {
		  const myModal = new bootstrap.Modal('#<?php echo $modId; ?>');
		  myModal.show();
		}
		window.addEventListener('load', Consenty);
	</script>
<?php endif; ?>

<div id="<?php echo $modId; ?>" class="<?php echo $module->id; ?> modal fade" tabindex="-1" aria-labelledby="<?php echo $modId; ?>" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="<?php echo $modId; ?>"><?php echo JText::_('CC_MOD_TITLE'); ?></h1>
        <button type="button" class="btn-close" onclick="setCookie()" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<blockquote><?php echo JText::_('CC_INTRO'); ?></blockquote>
		<hr/>
		<h5><?php echo JText::_('CC_EASY'); ?></h5>
			<div class="row">
				<div class="col-12 ms-md-5">
					<label class="btn btn-outline-success"><input type="checkbox" id="cc_all" name ="cc_all" class="btn btn-sm btn-warning" onchange="checkAll(this)" consenty-toggle="" /> <?php echo JText::_('CC_TOGGLE_ALL'); ?></label>
				</div>
			</div>
		<hr/>



<div class="accordion-flush" id="accordion<?php echo $module->id; ?>">

<div class="accordion-item">
<div class="d-grid gap-2">
<button class="btn btn-secondary text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo JText::_('CC_FUNCTION'); ?><i class="bi bi-arrow-down-left-square float-end"></i></button></button>
</div>
<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordion<?php echo $module->id; ?>">
<div class="accordion-body">

		<div class="row">
			<div class="col-12">
				<p class="ms-2"><small><?php echo JText::_('CC_DESC_FUNCTION'); ?></small></p>
			</div>
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" id="easybooking" name ="easybooking" consenty-toggle="easybooking"><strong> <?php echo JText::_('CC_EASYBOOKING'); ?></strong></label></p>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-warning" consenty-allow="easybooking"><?php echo JText::_('JYES'); ?></button>
				<button type="button" class="btn btn-sm btn-outline-secondary" consenty-revoke="easybooking"><?php echo JText::_('JNO'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-3"><small><?php echo JText::_('CC_DESC_EB'); ?></small></p>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" id="leaflet" name ="leaflet" consenty-toggle="leaflet"><strong> <?php echo JText::_('CC_LEAFLET'); ?></strong></label></p>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-warning" consenty-allow="leaflet"><?php echo JText::_('JYES'); ?></button>
				<button type="button" class="btn btn-sm btn-outline-secondary" consenty-revoke="leaflet"><?php echo JText::_('JNO'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-3"><small><?php echo JText::_('CC_DESC_LEAFLET'); ?></small></p>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" id="elfsight" name="elfsight" consenty-toggle="elfsight"><strong> <?php echo JText::_('CC_ELFSIGHT'); ?></strong></label></p>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-warning" consenty-allow="elfsight"><?php echo JText::_('JYES'); ?></button>
				<button type="button" class="btn btn-sm btn-outline-secondary" consenty-revoke="elfsight"><?php echo JText::_('JNO'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-3"><small><?php echo JText::_('CC_DESC_ELFSIGHT'); ?></small></p>
			</div>
		</div>

</div>
</div>
</div>		

<div class="accordion-item mt-2">
<div class="d-grid gap-2">
<button class="btn btn-warning text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><?php echo JText::_('CC_LIVEPICS'); ?><i class="bi bi-arrow-down-left-square float-end"></i></button></button>
</div>
<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion<?php echo $module->id; ?>">
<div class="accordion-body">
		<div class="row mt-2">
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" id="webcams" name="webcams" consenty-toggle="webcams"><strong> <?php echo JText::_('CC_WEBCAMS'); ?></strong></label></p>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-warning" consenty-allow="webcams"><?php echo JText::_('JYES'); ?></button>
				<button type="button" class="btn btn-sm btn-outline-secondary" consenty-revoke="webcams"><?php echo JText::_('JNO'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-3"><small><?php echo JText::_('CC_DESC_WEBCAMS'); ?></small></p>
			</div>
		</div>

</div>
</div>
</div>		

<div class="accordion-item mt-2">
<div class="d-grid gap-2">
<button class="btn btn-danger text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><?php echo JText::_('CC_STATISTICS'); ?><i class="bi bi-arrow-down-left-square float-end"></i></button>
</div>
<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion<?php echo $module->id; ?>">
<div class="accordion-body">

		<div class="row mt-2">
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" id="matomo" name="matomo" consenty-toggle="matomo"><strong> <?php echo JText::_('CC_MATOMO'); ?></strong></label></p>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-danger" consenty-allow="matomo"><?php echo JText::_('JYES'); ?></button>
				<button type="button" class="btn btn-sm btn-outline-secondary" consenty-revoke="matomo"><?php echo JText::_('JNO'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-2"><small><?php echo JText::_('CC_DESC_MATOMO'); ?></small></p>
			</div>
		</div>		


</div>
</div>
</div>

</div>

	  </div>

      <div class="modal-footer">
		<div class="row">
			<div class="col-6">
				<a href="<?php echo JText::_('CC_GOTO_GPDRLINK'); ?>"><i class="bi bi-arrow-down-right-square"></i> <?php echo JText::_('CC_GOTO_GPDR'); ?></a>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-secondary float-end" onclick="setCookie()" data-bs-dismiss="modal"><?php echo JText::_('CC_CLOSE'); ?></button>
			</div>
		</div>
      </div>
    </div>
  </div>

</div>

<script>
// Modal kommt nur 1x zum Vorschein: 
function setCookie(cname, cvalue, exdays) {
	cname = "cc-show";
	cvalue = "consent";
	var d=new Date();
      d.setTime(d.getTime()+(2*24*60*60*1000));
      var expires = "; expires="+d.toGMTString();
	document.cookie = cname + "=" + cvalue + "; " + expires + ";path=/;SameSite=strict;Secure=True";
}

function checkAll(myCheckBox) {
  let checkboxes = document.querySelectorAll("input[type = 'checkbox']");
  
  if (myCheckBox.checked == true) {
    checkboxes.forEach(function(checkbox) {
	  checkbox.checked = true;
	  // set Consenty Cookies
	  localStorage.setItem('consenty', '{"leaflet":1,"webcams":1,"matomo":1,"easybooking":1,"elfsight":1}');
    });
  } else {
    checkboxes.forEach(function(checkbox) {
      checkbox.checked = false;
	  localStorage.setItem('consenty', '{}');
    });
  }
}
</script>