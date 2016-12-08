<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * fancyBoxes plugin
 *
 * @author Roffun
 * @copyright Copyright (C) 2015 - today: Roffun | https://webcot.net/cotonti/extensions/fancyboxes-plugin
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

if ($cfg['plugin']['fancyboxes']['css'] == 1)
{
	Resources::addFile($cfg['plugins_dir'] .'/fancyboxes/css/jquery.fancybox.css');
}
