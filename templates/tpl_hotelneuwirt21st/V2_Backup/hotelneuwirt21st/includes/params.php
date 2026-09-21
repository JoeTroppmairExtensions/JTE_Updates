<?php
/*------------------------------------------------------------------------
# von Joe Troppmair
# Website https://www.troppmair.com
-------------------------------------------------------------------------*/

	defined('_JEXEC') or die;
	
	// Anzeige Meta-Generator Joomla ausschalten:
		$this->setGenerator(null);
	
	// Template-Einstellungen holen
		$params = JFactory::getApplication()->getTemplate(true)->params;
		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();
	
	// Spalten-Breiten
		$leftcolgrid = ($this->countModules('left') == 0) ? 0 :
		$this->params->get('leftColumnWidth', 3);
		$rightcolgrid = ($this->countModules('right') == 0) ? 0 :
		$this->params->get('rightColumnWidth', 3);

	// Lade ganzes Bootstrap-Framework vom J!-Core:
	#	JHtml::_('bootstrap.framework');
	
	// Zuladen von Javascript Dateien
	#	$doc->addScript('templates/' . $this->template . '/js/bootstrap5.min.js');
	#	$doc->addScript('templates/' . $this->template . '/js/bootstrap5.bundle.min.js');
		$doc->addScript('templates/' . $this->template . '/js/template.js');
		$doc->addScript('templates/' . $this->template . '/js/jquery-ui.min.js');

	// Add Stylesheets
		// Bootstrap 4
		$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap4.min.css');
		// Bootstrap 5
	#	$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap5.min.css');
	
		$doc->addStyleSheet('templates/' . $this->template . '/css/template.css');
		$doc->addStyleSheet('templates/' . $this->template . '/css/off-canvas.css');
		$doc->addStyleSheet('templates/' . $this->template . '/css/sidebar.css');
		$doc->addStyleSheet('templates/' . $this->template . '/css/jquery-ui.min.css');
	
	// Variables
	#	$headdata = $doc->getHeadData();
	#	$menu = $app->getMenu();
	#	$active = $app->getMenu()->getActive();
	#	$pageclass = $params->get('pageclass_sfx');
		$tpath = $this->baseurl . '/templates/' . $this->template;

	// Parameter
		$fontawesome = $this->params->get('fontawesome');

	// Add stylesheets
		if ($fontawesome == 1){
			#$doc->addStyleSheet('templates/' . $this->template . '/css/font-awesome.min4.css'); erfordert Ordner "fonts", V5 erfordert Ordner "webfonts"
			$doc->addStyleSheet('templates/' . $this->template . '/css/font-awesome.5.all.css');
			#$doc->addStyleSheet($tpath . '/css/font-awesome.min.css');
		}