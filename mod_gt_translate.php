<?php
/*
# mod_gt_translate - Google Translate Module by Cloudfaction.nl Version 1.0.0
# ---------------------------------------------------------------------------
# Author    Cloudfaction http://www.cloudfaction.nl
# Copyright (C) 2014 Cloudfaction.nl. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: http://ww.cloudfaction.nl
*/
 
// no direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once( dirname(__FILE__) . '/helper.php' );
 
$helper = modGtTranslate::GtTranslate($params);
$BorderRadius = $params->get('BorderRadius');
$BackgroundColor = $params->get('BackgroundColor');
$TextColor = $params->get('TextColor');
$BorderWidth = $params->get('BorderWidth');
$BorderColor = $params->get('BorderColor');

require( JModuleHelper::getLayoutPath('mod_gt_translate'));
?>