<?php /* Smarty version 2.6.11, created on 2019-05-24 20:20:39
         compiled from cache/modules/Users/SearchFormFooter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/modules/Users/SearchFormFooter.tpl', 12, false),)), $this); ?>

</form>
<?php echo '
<script>
function toggleInlineSearch()
{
    var $trigger = $("#tabFormAdvLink");
    if (document.getElementById(\'inlineSavedSearch\').style.display == \'none\'){
        document.getElementById(\'showSSDIV\').value = \'yes\'		
        document.getElementById(\'inlineSavedSearch\').style.display = \'\';
'; ?>

        $trigger.attr("title", "<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_HIDE_OPTIONS'), $this);?>
")
            .addClass('expanded');
<?php echo '
    }else{
'; ?>

        $trigger.attr("title", "<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SHOW_OPTIONS'), $this);?>
")
            .removeClass("expanded");
<?php echo '			
        document.getElementById(\'showSSDIV\').value = \'no\';		
        document.getElementById(\'inlineSavedSearch\').style.display = \'none\';		
    }
}
</script>
'; ?>