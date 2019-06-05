<?php /* Smarty version 2.6.11, created on 2019-05-27 08:45:02
         compiled from modules/Teams/tpls/TBAConfiguration.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Teams/tpls/TBAConfiguration.tpl', 15, false),array('modifier', 'in_array', 'modules/Teams/tpls/TBAConfiguration.tpl', 69, false),)), $this); ?>
<?php echo $this->_tpl_vars['moduleTitle']; ?>

<script type="text/javascript"
        src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_tba.js'), $this);?>
"></script>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Connectors/tpls/tabs.css'), $this);?>
"/>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Teams/css/custom.css'), $this);?>
"/>

<form name="TBAConfiguration" method="POST">

    <input type="hidden" name="module" value="Administration">
    <input type="hidden" name="action" value="saveTBAConfiguration">

    <span class="error"><?php echo $this->_tpl_vars['error']['main']; ?>
</span>

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
        <tr>
            <td>
                <input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
"
                       class="button" type="button" name="cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
                &nbsp;
                <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"
                       accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
"
                       class="button primary"
                       type="button"
                       name="save"
                       value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"/>
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td align="left" scope="row" colspan="2" class="left">
                <div class="padding-bottom-20"><?php echo $this->_tpl_vars['MOD']['LBL_TBA_CONFIGURATION_TITLE']; ?>
</div>
                <div class="padding-bottom-20"><?php if ($this->_tpl_vars['isUserAdmin']):  echo $this->_tpl_vars['MOD']['LBL_TBA_CONFIGURATION_WARNING_DESC'];  else:  echo $this->_tpl_vars['MOD']['LBL_TBA_CONFIGURATION_WARNING_DESC_NO_ADMIN'];  endif; ?></div>
            </td>
        </tr>
        <tr>
            <td align="left" scope="row" width="300" class="left"><?php echo $this->_tpl_vars['MOD']['LBL_TBA_CONFIGURATION_LABEL']; ?>
</td>
            <td scope="row" class="left bg-white">
                <input id="tba_set_enabled" type="checkbox" name="team_based[enable]" value="true"
                       <?php if ($this->_tpl_vars['config']['enabled']): ?>checked="checked"<?php endif; ?> />
            </td>
        </tr>
    </table>

    <table id="tba_em_block" width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view"
           <?php if (! $this->_tpl_vars['config']['enabled']): ?>style="display: none;"<?php endif; ?>>
        <tr>
            <th align="left" scope="row"><h4><?php echo $this->_tpl_vars['MOD']['LBL_TBA_CONFIGURATION_MOD_LABEL']; ?>
</h4></th>
        </tr>
        <tr>
            <td align="left" class="padding-0">
                <table width="100%" border="0" cellspacing="10" cellpadding="0" class="edit view">
                    <tr>
                    <?php $_from = $this->_tpl_vars['actionsList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tba'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tba']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['tba']['iteration']++;
?>
                        <td class="title <?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['config']['enabled_modules']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['config']['enabled_modules']))): ?>active<?php endif; ?>">
                            <div class="tba-container">
                                <input type="checkbox" name="team_based[enabled_modules][]"
                                       data-group="tba_em" data-module-name="<?php echo $this->_tpl_vars['value']; ?>
" value="<?php echo $this->_tpl_vars['value']; ?>
" id="tba_em_<?php echo $this->_tpl_vars['key']; ?>
"
                                       <?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['config']['enabled_modules']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['config']['enabled_modules']))): ?>checked="checked"<?php endif; ?>/>
                                <label for="tba_em_<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['value']]; ?>
</label>
                            </div>
                        </td>
                        <?php if ($this->_foreach['tba']['iteration'] % 4 == 0): ?></tr><tr><?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>