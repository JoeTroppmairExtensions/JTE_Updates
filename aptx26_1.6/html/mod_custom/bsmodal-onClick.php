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
    <!--window.onload = () => {
      const contactModal = bootstrap.Modal('#<?php echo $modId; ?>');
      contactModal.show();
    <!--}
</script>

<div id="<?php echo $modId; ?>" class="<?php echo $module->id; ?> modal fade" tabindex="-1" aria-labelledby="<?php echo $modId; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="<?php echo $modId; ?>"><?php echo JText::_('K_TITLE'); ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo $module->content; ?>
      </div>
    </div>
  </div>
</div>
