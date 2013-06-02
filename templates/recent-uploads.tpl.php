<h3 style="<?php echo $theme_data['header_style'] ?>">Recent Uploads</h3>
<?php
foreach ($data as $i => $row) {
  foreach ($row as $key => $value) {
    if (in_array($key, array('total_rows', 'rows_ok', 'rows_reject'))) {
      $row[$key] = number_format($value);
    }
  }
  unset($row['runtime']); // Don't display this field for now - too wide.
  $data[$i] = $row;
}
$header = array('Date', 'Admin', 'File', 'Signup Form', 'Total', 'Rows OK', 'Rejected'/*, 'Runtime'*/);
echo theme('table', array('header' => $header, 'rows' => $data, 'attributes' => $theme_data['table_attributes']));
?>
<br />
