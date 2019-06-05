<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/application/Ext/Include/Expenses.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['Exp_Expenses'] = 'Exp_Expenses';
$beanFiles['Exp_Expenses'] = 'modules/Exp_Expenses/Exp_Expenses.php';
$moduleList[] = 'Exp_Expenses';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/rli_unhide.ext.php

$moduleList[] = 'RevenueLineItems';
if (isset($modInvisList) && is_array($modInvisList)) {
    foreach ($modInvisList as $key => $mod) {
        if ($mod === 'RevenueLineItems') {
            unset($modInvisList[$key]);
        }
    }
}
?>
<?php
// Merged from custom/Extension/application/Ext/Include/Sites.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['Si_Sites'] = 'Si_Sites';
$beanFiles['Si_Sites'] = 'modules/Si_Sites/Si_Sites.php';
$moduleList[] = 'Si_Sites';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/Site_Visits.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['SV_Site_Visits'] = 'SV_Site_Visits';
$beanFiles['SV_Site_Visits'] = 'modules/SV_Site_Visits/SV_Site_Visits.php';
$moduleList[] = 'SV_Site_Visits';


?>
