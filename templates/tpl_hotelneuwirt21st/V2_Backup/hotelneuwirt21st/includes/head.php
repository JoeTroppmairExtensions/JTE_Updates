<?php
/*------------------------------------------------------------------------
# von Joe Troppmair
# Website https://www.troppmair.com
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die;
JHtml::_('bootstrap.framework');
// Setze HTML5 Document Output
$doc = JFactory::getDocument();
$doc->setHtml5(true);
?>
<?php
#if(is_readable(JPATH_THEMES.'/'.$this->template.'/css/custom.css'))
#{ 	JFactory::getDocument()->addStylesheet(JURI::base().'templates/'.$this->template.'/css/custom.css'); }
?>
<head>
<!-- TRUENDO Privacy Center -->
<script id="truendoAutoBlock" type="text/javascript" src="https://cdn.priv.center/pc/truendo_cmp.pid.js" data-siteid="db2b34ac-b44b-4006-b442-fecffed9d85b"></script>
<!-- End TRUENDO Privacy Center -->
<jdoc:include type="head" />
<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
</head>
