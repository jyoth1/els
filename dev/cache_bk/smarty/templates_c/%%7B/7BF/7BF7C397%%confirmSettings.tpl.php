<?php /* Smarty version 2.6.11, created on 2019-05-24 18:59:18
         compiled from install/templates/confirmSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'constant', 'install/templates/confirmSettings.tpl', 184, false),array('modifier', 'realpath', 'install/templates/confirmSettings.tpl', 304, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo $this->_tpl_vars['langHeader']; ?>
>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title><?php echo $this->_tpl_vars['MOD']['LBL_WIZARD_TITLE']; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_TITLE']; ?>
</title>
    <link REL="SHORTCUT ICON" HREF="<?php echo $this->_tpl_vars['icon']; ?>
">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['css']; ?>
" type="text/css" />
</head>
<body onload="javascript:document.getElementById('button_next2').focus();">
<form action="install.php" method="post" name="setConfig" id="form">
    <input type="hidden" name="current_step" value="<?php echo $this->_tpl_vars['next_step']; ?>
">
    <table cellspacing="0" cellpadding="0" border="0" align="center" class="shell">
        <tr>
            <td colspan="2" id="help"><a href="<?php echo $this->_tpl_vars['help_url']; ?>
" target='_blank'><?php echo $this->_tpl_vars['MOD']['LBL_HELP']; ?>
 </a></td>
        </tr>
        <tr>
            <th width="500">
                <p>
                    <img src="<?php echo $this->_tpl_vars['sugar_md']; ?>
" alt="SugarCRM" border="0">
                </p>
                <?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_TITLE']; ?>
</th>
            <th width="200" style="text-align: right;"><a href="http://www.sugarcrm.com" target="_blank"><IMG
                            src="<?php echo $this->_tpl_vars['loginImage']; ?>
" alt="SugarCRM" border="0"></a>
            </th>
        </tr>
        <tr>
            <td colspan="2">
                <table width="100%" cellpadding="0" cellpadding="0" border="0" class="StyleDottedHr">
                    <tr>
                        <th colspan="3" align="left"><?php echo $this->_tpl_vars['MOD']['LBL_DBCONF_TITLE']; ?>
</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_DB_TYPE']; ?>
</strong></td>
                        <td><?php echo $_SESSION['setup_db_type']; ?>
</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_DBCONF_HOST_NAME']; ?>
</strong></td>
                        <td><?php echo $_SESSION['setup_db_host_name']; ?>
</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_DBCONF_DB_NAME']; ?>
</strong></td>
                        <td>
                            <?php echo $_SESSION['setup_db_database_name']; ?>
 <?php echo $this->_tpl_vars['dbCreate']; ?>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_DBCONF_DB_ADMIN_USER']; ?>
</strong></td>
                        <td><?php echo $_SESSION['setup_db_admin_user_name']; ?>
</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_DBCONF_DEMO_DATA']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['demoData']; ?>
</td>
                    </tr>
                    <?php if ($this->_tpl_vars['yesNoDropCreate']): ?>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_DBCONF_DB_DROP']; ?>
</strong></td>
                            <td><?php echo $this->_tpl_vars['yesNoDropCreate']; ?>
</td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['db']->supports('fulltext')): ?>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_FTS']; ?>
</strong></td>
                            <td>
                                <?php if ($this->_tpl_vars['db']->full_text_indexing_installed()): ?>
                                    <?php echo $this->_tpl_vars['MOD']['LBL_FTS_INSTALLED']; ?>

                                <?php else: ?>
                                    <span class="stop">
                                        <strong><?php echo $this->_tpl_vars['MOD']['LBL_FTS_INSTALLED_ERR1']; ?>
</strong>
                                        <br>
                                        <?php echo $this->_tpl_vars['MOD']['LBL_FTS_INSTALLED_ERR2']; ?>

                                    </span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php if ($_SESSION['install_type'] && $_SESSION['install_type'] == 'custom'): ?>
                        <tr>
                            <td colspan="3" align="left"></td>
                        </tr>
                        <tr>
                            <th colspan="3" align="left"><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_TITLE']; ?>
</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_URL']; ?>
</strong></td>
                            <td><?php echo $_SESSION['setup_site_url']; ?>
</td>
                        </tr>
                        <tr>
                        <tr>
                            <td colspan="3" align="left"></td>
                        </tr>
                        <th colspan="3" align="left"><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_SUGAR_UPDATES']; ?>
</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_SUGAR_UP']; ?>
</strong></td>
                            <td><?php echo $this->_tpl_vars['yesNoSugarUpdates']; ?>
</td>
                        </tr>
                        <tr>
                        <tr>
                            <td colspan="3" align="left"></td>
                        </tr>
                        <th colspan="3" align="left"><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_SITE_SECURITY']; ?>
</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_CUSTOM_SESSION']; ?>
?</strong></td>
                            <td><?php echo $this->_tpl_vars['yesNoCustomSession']; ?>
</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_CUSTOM_LOG']; ?>
?</strong></td>
                            <td><?php echo $this->_tpl_vars['yesNoCustomLog']; ?>
</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_CUSTOM_ID']; ?>
?</strong></td>
                            <td><?php echo $this->_tpl_vars['yesNoCustomId']; ?>
</td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td colspan="3" align="left"></td>
                    </tr>
                    <tr>
                        <th colspan="3" align="left"><?php echo $this->_tpl_vars['MOD']['LBL_SYSTEM_CREDS']; ?>
</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_DBCONF_DB_USER']; ?>
</strong></td>
                        <td>
                            <?php echo $_SESSION['setup_db_sugarsales_user']; ?>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_DBCONF_DB_PASSWORD']; ?>
</strong></td>
                        <td>
                            <span id="hide_db_admin_pass"><?php echo $this->_tpl_vars['MOD']['LBL_HIDDEN']; ?>
</span>
                            <span style="display:none"
                                  id="show_db_admin_pass"><?php echo $_SESSION['setup_db_sugarsales_password']; ?>
</span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_ADMIN_Name']; ?>
</strong></td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_SITECFG_ADMIN_PASS']; ?>
</strong></td>
                        <td>
                            <span id="hide_site_admin_pass"><?php echo $this->_tpl_vars['MOD']['LBL_HIDDEN']; ?>
</span>
                            <span style="display:none"
                                  id="show_site_admin_pass"><?php echo $_SESSION['setup_site_admin_password']; ?>
</span>
                        </td>
                    </tr>
                    <tr><td colspan="3" align="left"></td></tr>
                    <tr><th colspan="3" align="left"><?php echo $this->_tpl_vars['MOD']['LBL_SYSTEM_ENV']; ?>
</th></tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_PHPVER']; ?>
</strong></td>
                        <td><?php echo ((is_array($_tmp='PHP_VERSION')) ? $this->_run_mod_handler('constant', true, $_tmp) : constant($_tmp)); ?>
</td>
                    </tr>
                                                            <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_XML']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_OK']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_MBSTRING']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['mbStatus']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_CONFIG']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_OK']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_CUSTOM']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_OK']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_MODULE']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_OK']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_UPLOAD']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_OK']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_DATA']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_OK']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_CACHE']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_OK']; ?>
</td>
                    </tr>
                                                            <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_MEM']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['memory_msg']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_ZLIB']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['zlibStatus']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_ZIP']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['zipStatus']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_IMAP']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['imapStatus']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_CURL']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['curlStatus']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_UPLOAD_MAX_FILESIZE_TITLE']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['fileMaxStatus']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_SPRITE_SUPPORT']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['spriteSupportStatus']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong>PHP allows to use stream (<?php echo $this->_tpl_vars['uploadStream']; ?>
://)</strong></td>
                        <td><?php echo $this->_tpl_vars['suhosinStatus']; ?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $this->_tpl_vars['MOD']['LBL_CHECKSYS_PHP_INI']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['phpIniLocation']; ?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
                <tr>
            <td align="right" colspan="2">
                <table cellspacing="0" cellpadding="0" border="0" class="stdTable">
                    <tr><th align="left" colspan="2">&nbsp;</th></tr>
                    <tr>
                        <td align="left" colspan="2">
                            <?php if ($this->_tpl_vars['is_windows']): ?>
                                <font color="red">
                                    <?php echo $this->_tpl_vars['mod_strings_scheduler']['LBL_CRON_WINDOWS_DESC']; ?>
<br>
                                </font>
                                cd <?php echo ((is_array($_tmp='./')) ? $this->_run_mod_handler('realpath', true, $_tmp) : realpath($_tmp)); ?>
<br>
                                php.exe -f cron.php
                            <?php else: ?>
                                <font color="red">
                                    <?php echo $this->_tpl_vars['mod_strings_scheduler']['LBL_CRON_INSTRUCTIONS_LINUX']; ?>

                                </font>
                                <?php echo $this->_tpl_vars['mod_strings_scheduler']['LBL_CRON_LINUX_DESC']; ?>

                                <br>
                                *&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;
                                cd <?php echo ((is_array($_tmp='./')) ? $this->_run_mod_handler('realpath', true, $_tmp) : realpath($_tmp)); ?>
; php -f cron.php > /dev/null 2>&1
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
            </td>
        <tr>
            <td colspan="3" align="right">
                <input type="button" class="button" name="print_summary" id="button_print_summary_settings"
                       value="<?php echo $this->_tpl_vars['MOD']['LBL_PRINT_SUMM']; ?>
"
                       onClick='window.print()'
                       onCluck='window.open("install.php?current_step="+(document.setConfig.current_step.value -1)+"&goto=<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
&print=true");'/>&nbsp;
            </td>
        </tr>
        <tr>
            <td align="right" colspan="2">
                <hr>
                <table cellspacing="0" cellpadding="0" border="0" class="stdTable">
                    <tr>
                        <td align=right>
                            <input type="button" class="button" id="show_pass_button" value="<?php echo $this->_tpl_vars['MOD']['LBL_SHOW_PASS']; ?>
"
                                   onClick='togglePass();'/>
                        </td>
                        <td>
                            <input type="hidden" name="goto" id="goto">
                            <input class="button" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_BACK']; ?>
" id="button_back_settings"
                                   onclick="document.getElementById('goto').value='<?php echo $this->_tpl_vars['MOD']['LBL_BACK']; ?>
';document.getElementById('form').submit();"/>
                        </td>
                        <td>
                            <input class="button" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_LANG_BUTTON_COMMIT']; ?>
"
                                   onclick="document.getElementById('goto').value='<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
';document.getElementById('form').submit();"
                                   id="button_next2"/>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
<script>
    function togglePass(){
        if(document.getElementById('show_site_admin_pass').style.display == ''){
            document.getElementById('show_pass_button').value = "<?php echo $this->_tpl_vars['MOD']['LBL_SHOW_PASS']; ?>
";
            document.getElementById('hide_site_admin_pass').style.display = '';
            document.getElementById('hide_db_admin_pass').style.display = '';
            document.getElementById('show_site_admin_pass').style.display = 'none';
            document.getElementById('show_db_admin_pass').style.display = 'none';
        } else {
            document.getElementById('show_pass_button').value = "<?php echo $this->_tpl_vars['MOD']['LBL_HIDE_PASS']; ?>
";
            document.getElementById('show_site_admin_pass').style.display = '';
            document.getElementById('show_db_admin_pass').style.display = '';
            document.getElementById('hide_site_admin_pass').style.display = 'none';
            document.getElementById('hide_db_admin_pass').style.display = 'none';

        }
    }
</script>
</body>
</html>