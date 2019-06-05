<?php /* Smarty version 2.6.11, created on 2019-05-25 11:27:32
         compiled from modules/Reports/templates/_template_summary_list_view_2gpby.tpl */ ?>
<?php 
	require_once('modules/Reports/templates/templates_reports.php');
	$reporter = $this->get_template_vars('reporter');
	$args = $this->get_template_vars('args');
	$header_row = $this->get_template_vars('header_row');
	$got_row = 0;
	$maximumCellSize = 0;
	$rowsAndColumnsData = array();
	$legend = array();
	$columnDataFor2ndGroup = array();
	$columnDataArray = getColumnDataAndFillRowsFor2By2GPBY($reporter, $header_row, $rowsAndColumnsData, $columnDataFor2ndGroup, 1, $maximumCellSize, $legend);
	$headerColumnNameArray = getHeaderColumnNamesForMatrix($reporter, $header_row, $columnDataFor2ndGroup);
	$columnNameArray = getColumnNamesForMatrix($reporter, $header_row, $columnDataFor2ndGroup);
	$totalColumns = count($headerColumnNameArray) + count($columnDataFor2ndGroup) - 1;
	$this->assign('legend', $legend);
	$maximumCellSize = $maximumCellSize - $reporter->addedColumns;
	$this->assign('legend', implode(",", $legend));
 ?>

<B><?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_DATA_COLUMN_ORDERS']; ?>
</B> <?php echo $this->_tpl_vars['legend']; ?>

<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportlistView">
<tr height="20">
<?php 
	for ($i = 0 ; $i < count($headerColumnNameArray) ; $i++) {
		$this->assign('headerColumnName', $headerColumnNameArray[$i]);
		$headerColumnClassName = "reportlistViewMatrixThS1";
		if ($i == (count($headerColumnNameArray) - 1)) {
			$headerColumnClassName = "reportlistViewMatrixThS2";
		} // if
		$this->assign('headerColumnClassName', $headerColumnClassName);
		if ($i == 1) {
		$this->assign('topLevelColSpan', count($columnDataFor2ndGroup));
 ?>
	<th scope="col" align='center' colspan="<?php echo $this->_tpl_vars['topLevelColSpan']; ?>
" class="<?php echo $this->_tpl_vars['headerColumnClassName']; ?>
" valign=middle wrap><?php echo $this->_tpl_vars['headerColumnName']; ?>
</td>
<?php 
		} else {
		$rowSpan = 2;
		if (count($columnDataFor2ndGroup) == 0) {
			$rowSpan = 1;
		} // if
		$this->assign('topLevelRowSpan', $rowSpan);
 ?>
	<th scope="col" align='center' rowspan="<?php echo $this->_tpl_vars['topLevelRowSpan']; ?>
" class="<?php echo $this->_tpl_vars['headerColumnClassName']; ?>
" valign=middle wrap><?php echo $this->_tpl_vars['headerColumnName']; ?>
</td>

<?php 
		} // else
	} // for
 ?>
</tr>
<?php 
	if ($totalColumns > 2) {
 ?>
<tr height="20">
<?php 
	$count = 0;
	for ($i = 0 ; $i < $totalColumns ; $i++) {
		if ($i == 0 || $i == ($totalColumns -1)) {
			continue;
		}  else {
		$headerColumn2ClassName = "reportlistViewMatrixThS1";
		$this->assign('headerColumn2ClassName', $headerColumn2ClassName);
		$cellData = $columnDataFor2ndGroup[$count];
		if (empty($cellData)) {
			$cellData = "&nbsp;";
		} // if
		$this->assign('columnDataFor2ndGroup', $cellData);
		$count++;
 ?>
	<th scope="col" align='center' class="<?php echo $this->_tpl_vars['headerColumn2ClassName']; ?>
" valign=middle wrap><?php echo $this->_tpl_vars['columnDataFor2ndGroup']; ?>
</td>
<?php 
		} // else
	} // for
 ?>
</tr>
<?php 
	} // if
  
	// iteration for the group by data
	for ($i = 0 ; $i < count($rowsAndColumnsData) ; $i++) {
		$rowData = $rowsAndColumnsData[$i];
		for ($k = 0 ; $k < $maximumCellSize ; $k++) {
 ?>
		<tr height="20">
<?php 
		for ($j = 0 ; $j < count($columnNameArray) ; $j++) {
			$cellData = "&nbsp;";
			if ($j == 0 ) {
				if ($k != 0) {
					continue;
				} // if
				if (isset($rowData[$columnNameArray[$j]])) {
					$cellData = $rowData[$columnNameArray[$j]];
				} // if
				if (empty($cellData)) {
					$cellData = "&nbsp;";
				} // if
				$this->assign('cellData', $cellData);
				$this->assign('rowSpanForData', $maximumCellSize);
				$dataCellClass = "reportlistViewMatrixRightEmptyData";
				if ($i == (count($rowsAndColumnsData)-1)) {
					$dataCellClass = "reportlistViewMatrixRightEmptyData1";
				} // if
				$this->assign('dataCellClass', $dataCellClass);
 ?>
	<th scope="col" ROWSPAN='<?php echo $this->_tpl_vars['rowSpanForData']; ?>
' align='center' class="<?php echo $this->_tpl_vars['dataCellClass']; ?>
" valign=middle wrap><?php echo $this->_tpl_vars['cellData']; ?>
</td>
<?php 
			} else {
				$cellData = "&nbsp;";
				if (isset($rowData[$columnNameArray[$j]])) {
					$cellDataArray = $rowData[$columnNameArray[$j]];
					if (is_array($cellDataArray)) {
						$arrayKeys = array_keys($cellDataArray);
						$cellData = $cellDataArray[$arrayKeys[$k]];
						if ($j == 1) {
							//$cellData = $arrayKeys[$k] . " = " . $cellData;
						} // if
						//$cellData = "&nbsp;";
					} else {
						$cellData = "&nbsp;";
					} // else
				} // if
				$this->assign('cellData', $cellData);
				$dataCellClass = "reportGroupByDataMatrixEvenListRowS1";
				if ($j == (count($columnNameArray)-1)) {
					$dataCellClass = "reportGroupByDataMatrixEvenListRowS2";
				} // if
				if ($i == (count($rowsAndColumnsData)-1)) {
					if ($k == ($maximumCellSize -1)) {
						$dataCellClass = "reportGroupByDataMatrixEvenListRowS3";
						if ($j == (count($columnNameArray)-1)) {
							$dataCellClass = "reportGroupByDataMatrixEvenListRowS4";
						} // if
					} // if
				} // if

				$this->assign('dataCellClass', $dataCellClass);
 ?>
	<td scope="col" align='center' class="<?php echo $this->_tpl_vars['dataCellClass']; ?>
" valign=middle wrap><?php echo $this->_tpl_vars['cellData']; ?>
</td>
<?php 
			} // else
		} // for
 ?>
</tr>
<?php 
		} // for
  
	} // for
	if (empty($rowsAndColumnsData)) {
 ?>
<tr height="20">
<?php 
		$emptyRowColumns = 2; // This is for 1 group by and 1 grand total
		if (count($columnDataFor2ndGroup) == 0) {
			$emptyRowColumns = $emptyRowColumns + 1;
		} else {
			$emptyRowColumns = $emptyRowColumns + count($columnDataFor2ndGroup);
		} // else
		for ($j = 0 ; $j < $emptyRowColumns ; $j++) {
 ?>
<td scope="col" align='center' class="reportGroupByDataMatrixEvenListRowS4" valign=middle wrap>No results</td>
<?php 
		} // for
	} // if
 ?>
</tr>
</table>
<?php 
template_query_table($reporter);
 ?>
