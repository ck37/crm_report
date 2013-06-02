<h3 style="<?php echo $theme_data['header_style'] ?>">Top Member Growth Forms (past 7 days)</h3>
<?php
foreach ($data as $i => $row) {
  // Add a counter.
  //$counter = (string) ('#' . (string)($i + 1) . '. ');
  $counter = ($i + 1) . '&period;';
  array_unshift($row, $counter);
  foreach ($row as $key => $value) {
    if (in_array($key, array('new_users'))) {
      $row[$key] = number_format($value);
    }
  }
  $data[$i] = $row;
}
  
$header = array('#', 'Type', 'Form Name', 'New Users', 'ID');
echo theme('table', array('header' => $header, 'rows' => $data, 'attributes' => $theme_data['table_attributes']));
?>
<br />
