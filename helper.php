<?php
/*
# mod_gt_translate - Google Translate Module by Cloudfaction.nl
# ---------------------------------------------------------------------------
# Author    Cloudfaction http://www.cloudfaction.nl
# Copyright (C) 2014 Cloudfaction.nl. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: http://ww.cloudfaction.nl
*/
class modGtTranslate
{
public static function GtTranslate( $params )
{
$html= <<<EOD
<div id="google_translate_element"><script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></div>
EOD;

return $html;
}
}
?>