<?php /* Smarty version 2.6.11, created on 2019-05-29 10:43:43
         compiled from modules/Teams/tpls/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_teamset_badges', 'modules/Teams/tpls/DetailView.tpl', 15, false),)), $this); ?>
<?php echo '';  $_from = $this->_tpl_vars['teams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tn'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tn']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['team']):
        $this->_foreach['tn']['iteration']++;
 echo '';  echo $this->_tpl_vars['team']['title'];  echo '';  if ($this->_tpl_vars['team']['badges']):  echo ' (<em>';  echo smarty_function_sugar_teamset_badges(array('items' => $this->_tpl_vars['team']['badges']), $this); echo '</em>)';  endif;  echo '';  if (! ($this->_foreach['tn']['iteration'] == $this->_foreach['tn']['total'])):  echo ', ';  endif;  echo '';  endforeach; endif; unset($_from);  echo ''; ?>
