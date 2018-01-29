<?php 
/*
# mod_gt_translate - Google Translate Module by Cloudfaction.nl Version 1.0.0
# ---------------------------------------------------------------------------
# Author    Cloudfaction http://www.cloudfaction.nl
# Copyright (C) 2014 Cloudfaction.nl. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: http://ww.cloudfaction.nl
*/
// No direct access
defined('_JEXEC') or die; ?>

<style>
.goog-te-banner-frame.skiptranslate {display: none !important;} 
body { top: 0px !important; }

.goog-te-gadget-simple .goog-te-menu-value {
color: <?php echo $TextColor; ?>;
}

.goog-te-gadget-simple {
border-radius:<?php echo $BorderRadius; ?>px;
background-color:<?php echo $BackgroundColor; ?>;
border-style:none !important;
border: <?php echo $BorderWidth; ?>px solid <?php echo $BorderColor; ?> !important;
}
</style>

<?php echo $helper; ?>

