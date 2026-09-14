<?php
 /**
  * Joe Troppmair ohne jQuery!
  * https://stackoverflow.com/questions/69534538/bootstrap-5-modal-open-on-page-load
  * ohne Button
	<!-- Button trigger modal
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $modId; ?>">
		Launch demo modal
	</button> -->
  */

defined('_JEXEC') or die;
// Bootstrap-Modul:
	JHtml::_('bootstrap.modal');
  
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

$modId = 'modal' . $module->id;
?>
<script type="text/javascript">
	function Consenty() {
	  const myModal = new bootstrap.Modal(<?php echo $modId; ?>);
	  myModal.show();
	}
	window.addEventListener('load', Consenty);
</script>

<div id="<?php echo $modId; ?>" class="<?php echo $module->id; ?> modal fade" tabindex="-1" aria-labelledby="<?php echo $modId; ?>" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="<?php echo $modId; ?>"><?php echo JText::_('CC_MOD_TITLE'); ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<blockquote><?php echo JText::_('CC_INTRO'); ?></blockquote>
		<hr />

<script language="JavaScript">
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}

</script>
<input type="checkbox" onClick="toggle()" /> <?php echo JText::_('CC_TOGGLE_ALL'); ?>
<hr/>

		<h5><?php echo JText::_('CC_FUNCTION'); ?></h5>
		<div class="row">
			<div class="col-12">
				<p class="ms-2"><small><?php echo JText::_('CC_DESC_FUNCTION'); ?></small></p>
			</div>
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" consenty-toggle="easybooking"><strong> <?php echo JText::_('CC_EASYBOOKING'); ?></strong></label>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-warning" consenty-allow="easybooking"><?php echo JText::_('CC_ALLOW'); ?></button>
				<button type="button" class="btn btn-sm btn-secondary" consenty-revoke="easybooking"><?php echo JText::_('CC_REVOKE'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-3"><small><?php echo JText::_('CC_DESC_EB'); ?></small></p>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" consenty-toggle="leaflet"><strong> <?php echo JText::_('CC_LEAFLET'); ?></strong></label>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-warning" consenty-allow="leaflet"><?php echo JText::_('CC_ALLOW'); ?></button>
				<button type="button" class="btn btn-sm btn-secondary" consenty-revoke="leaflet"><?php echo JText::_('CC_REVOKE'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-3"><small><?php echo JText::_('CC_DESC_LEAFLET'); ?></small></p>
			</div>
		</div>
		<hr />
		<h5><?php echo JText::_('CC_LIVEPICS'); ?></h5>
		<div class="row">
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" consenty-toggle="webcams"><strong> <?php echo JText::_('CC_WEBCAMS'); ?></strong></label>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-warning" consenty-allow="webcams"><?php echo JText::_('CC_ALLOW'); ?></button>
				<button type="button" class="btn btn-sm btn-secondary" consenty-revoke="webcams"><?php echo JText::_('CC_REVOKE'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-3"><small><?php echo JText::_('CC_DESC_WEBCAMS'); ?></small></p>
			</div>
		</div>
		<hr />
		<h5><?php echo JText::_('CC_STATISTICS'); ?></h5>
		<div class="row">
			<div class="col-6">
				<p class="ms-3"><label><input type="checkbox" consenty-toggle="matomo"><strong> <?php echo JText::_('CC_MATOMO'); ?></strong></label>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-danger" consenty-allow="matomo"><?php echo JText::_('CC_ALLOW'); ?></button>
				<button type="button" class="btn btn-sm btn-secondary" consenty-revoke="matomo"><?php echo JText::_('CC_REVOKE'); ?></button>
			</div>
			<div class="col-12">
				<p class="ms-2"><small><?php echo JText::_('CC_DESC_MATOMO'); ?></small></p>
			</div>
		</div>		
	  </div>

      <div class="modal-footer">
		<div class="row">
			<div class="col-6">
				<a href=""><?php echo JText::_('CC_GOTO_GPDR'); ?></a>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-sm btn-secondary float-end" data-bs-dismiss="modal"><?php echo JText::_('CC_CLOSE'); ?></button>
			</div>
		</div>
      </div>
    </div>
  </div>

</div>

