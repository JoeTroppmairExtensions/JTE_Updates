<!-- Button trigger modal -->
<?php
defined('_JEXEC') or die;
// Bootstrap-Modul:
	JHtml::_('bootstrap.modal');
  
use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

$modId = 'modal' . $module->id;
echo "Module-Id ist: " . $modID . "<br>";
?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Launch demo modal </button> <!-- Modal -->
<div id="exampleModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 id="exampleModalLabel" class="modal-title fs-5">Modal title</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
<div class="modal-body">...</div>
<div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button></div>
</div>
</div>
</div>
<hr /><!-- Button trigger modal -->