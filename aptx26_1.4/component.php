<?php

/**
 * @package     Joomla.Site
 * @subpackage  Templates.aptx26
 *
 * @copyright   (C) 2025 Joe Troppmair <https://www.troppmair.com>
 
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;


?>


<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <jdoc:include type="metas" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="styles" />
    <jdoc:include type="scripts" />
</head>
<body class="contentpane component <?php echo $this->direction === 'rtl' ? 'rtl' : ''; ?>">
    <jdoc:include type="message" />
    <jdoc:include type="component" />
</body>
</html>