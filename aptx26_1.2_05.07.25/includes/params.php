<?php
/*▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀█
█															█
█	(C) JoeTroppmairExtensions 2026		██ ██████ ██████	█
█										██   ██   ██		█
█		Joe Troppmair					██   ██   █████		█
█		www.troppmair.com			██	██   ██   ██     	█
█									 ████    ██   ██████	█
█															█
█															█
█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄*/

defined('_JEXEC') or die;

// Template-Parameter holen und als Variablen setzen
$tpath = $this->baseurl . '/templates/' . $this->template;
$fluidgrid = $this->params->get('fluidgrid');
$footercolgrid = $this->params->get('footercolgrid');
$leftcolgrid = ($this->countModules('left') == 0) ? 0 :
	$this->params->get('leftColumnWidth', 3);
$rightcolgrid = ($this->countModules('right') == 0) ? 0 :
	$this->params->get('rightColumnWidth', 3);
		
// Anzeige Meta-Generator Joomla ausschalten:
$this->setGenerator(null);
	
// Zuladen von CSS und JS Dateien
$doc = JFactory::getDocument();
$doc->addStyleSheet('media/vendor/bootstrap/css/bootstrap.min.css');
$doc->addStyleSheet($tpath . '/css/bootstrap-icons.min.css');
$doc->addStyleSheet($tpath . '/css/template.css');

// auf Startseite ist eine eigene CSS notwendig:
#$app = JFactory::getApplication();
#$menu = $app->getMenu()->getActive()->id;
#	if ($menu == "101") :
	if ( $this->countModules('startslider') ) :
		$doc->addStyleSheet($tpath . '/css/start.css');
		$doc->addScript($tpath . '/js/start.js', [], ['defer' => true]);
	endif;
$doc->addScript($tpath . '/js/consenty.js');
$doc->addScript($tpath . '/js/float-panel.js');

// lade das GANZE Bootstrap Framework aus '/media/jui' wenn gewünscht:
if ($this->params->get('bootstrapframework')) {
	JHtml::_('bootstrap.framework');
}
#if ($this->params->get('offcanvasmenu') == 0) {
	#JHtml::_('jquery.framework');
	#$doc->addScript($tpath . '/js/template.js');
#}

// Test Template Parameter anzeigen:
	#echo "Linke Spalte: " . $leftcolgrid . "<br>Rechte Spalte: " . $rightcolgrid . "<br>Footer-Grid: " . $footercolgrid . "<br>Bootstrap Fluid oder nicht: " . $fluidgrid . "<br>Template-Pfad: " . $tpath . "<br>Template-Name und Ordner: " . $this->template;
?>
