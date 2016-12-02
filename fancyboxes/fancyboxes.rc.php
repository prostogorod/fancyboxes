<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * fancyBoxes plugin
 *
 * @author  WebRomen
 * @copyright Copyright (c) 2015 - today: WebRomen | https://github.com/WebRomen/fancyboxes
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

if ($cfg['plugin']['fancyboxes']['css'] == 1)
{
	Resources::addFile($cfg['plugins_dir'] .'/fancyboxes/css/jquery.fancybox.css');
}
