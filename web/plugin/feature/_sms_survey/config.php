<?php
if(!(defined('_SECURE_'))){die('Intruder alert');};

// insert to left menu array
$menutab_feature = $core_config['menu']['main_tab']['feature'];
$arr_menu[$menutab_feature][] = array("index.php?app=menu&inc=feature_sms_survey&op=list", _('Manage survey'));

?>
