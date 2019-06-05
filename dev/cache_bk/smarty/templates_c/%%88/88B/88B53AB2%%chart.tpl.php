<?php /* Smarty version 2.6.11, created on 2019-05-25 11:27:32
         compiled from include/SugarCharts/sucrose/tpls/chart.tpl */ ?>

<?php if (! $this->_tpl_vars['error']): ?>
<script type="text/javascript">
	<?php echo '
	SUGAR.util.doWhen(
		"((SUGAR && SUGAR.mySugar && SUGAR.mySugar.sugarCharts)   || (SUGAR.loadChart && typeof loadSugarChart == \'function\')  || document.getElementById(\'showHideChartButton\') != null) && typeof(loadSugarChart) != undefined",
		function(){
			'; ?>

			var css = [];
			var chartConfig = {};
			var chartParams = {};
			// chartParams["label"] = "<?php echo $this->_tpl_vars['label']; ?>
";
			<?php $_from = $this->_tpl_vars['config']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['value']):
?>
				chartConfig["<?php echo $this->_tpl_vars['name']; ?>
"] = '<?php echo $this->_tpl_vars['value']; ?>
';
			<?php endforeach; endif; unset($_from); ?>
			<?php $_from = $this->_tpl_vars['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['value']):
?>
				chartParams["<?php echo $this->_tpl_vars['name']; ?>
"] = '<?php echo $this->_tpl_vars['value']; ?>
';
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['height'] > 480): ?>
				chartConfig["scroll"] = true;
			<?php endif; ?>
			chartConfig["reportView"] = true;
			chartConfig["direction"] = $('html', window.parent.document).hasClass('rtl') ? 'rtl' : 'ltr';
			loadCustomChartForReports = function(){
				loadSugarChart('<?php echo $this->_tpl_vars['chartId']; ?>
', '<?php echo $this->_tpl_vars['filename']; ?>
', css, chartConfig, chartParams);
			};
			// bug51857: fixed issue on report running in a loop when clicking on hide chart then run report in IE8 only
			// When hide chart button is clicked, the value of element showHideChartButton is set to $showchart.
			// Don't need to call the loadCustomChartForReports() function when hiding the chart.
			<?php if (! isset ( $this->_tpl_vars['showchart'] )): ?>
				loadCustomChartForReports();
			<?php else: ?>
			     if ($('#showHideChartButton').attr('value') != '<?php echo $this->_tpl_vars['showchart']; ?>
')
			        loadCustomChartForReports();
			<?php endif; ?>
			<?php echo '
		}
	);
	'; ?>

</script>
<div class="chartContainer">
	<div id="sb<?php echo $this->_tpl_vars['chartId']; ?>
" class="scrollBars">
    	<div id="d3_<?php echo $this->_tpl_vars['chartId']; ?>
" class="sc-chart sc-<?php echo $this->_tpl_vars['config']['chartType']; ?>
" style="width: 100%; height: <?php echo $this->_tpl_vars['height']; ?>
px;"></div>
    </div>
    <div id="d3_<?php echo $this->_tpl_vars['chartId']; ?>
_print" class="sc-chart sc-print sc-<?php echo $this->_tpl_vars['config']['chartType']; ?>
" style="width: 720px; height: 480px;"></div>
    <canvas id="canvas_<?php echo $this->_tpl_vars['chartId']; ?>
" width="1440" height="960" class="sc-image-canvas"></canvas>
</div>
<div class="clear"></div>
<?php else: ?>

<?php echo $this->_tpl_vars['error']; ?>

<?php endif; ?>