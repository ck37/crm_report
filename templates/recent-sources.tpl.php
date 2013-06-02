<h3 style="<?php echo $theme_data['header_style'] ?>">Top Member Growth Sources (past 7 days)</h3>
<?php
foreach ($data as $i => $row) {
  // Add a counter.
  array_unshift($row, (string)($i + 1) . '.');
  foreach ($row as $key => $value) {
    if (in_array($key, array('new_users'))) {
      $row[$key] = number_format($value);
    }
  }
  $data[$i] = $row;
}
  
$header = array('#', 'Source', 'New Users');
echo theme('table', array('header' => $header, 'rows' => $data, 'attributes' => array('class' => array('data-table'), 'style' => 'border: 1px solid #c0c0c0; padding: 3px', 'cellpadding' => '2')));
?>
<br />
