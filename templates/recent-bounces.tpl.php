<h3 style="<?php echo $theme_data['header_style'] ?>">Recent Bounces</h3>
<?php
foreach ($data as $i => $row) {
  foreach ($row as $key => $value) {
    if (in_array($key, array('bounces'))) {
      $row[$key] = number_format($value);
    }
  }
  $data[$i] = $row;
}
$header = array('Date', 'Bounces');
echo theme('table', array('header' => $header, 'rows' => $data, 'attributes' => $theme_data['table_attributes']));
?>
<br />
