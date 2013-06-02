<h3 style="<?php echo $theme_data['header_style'] ?>">Overall</h3>
<?php
foreach ($data as $i => $row) {
  foreach ($row as $key => $value) {
    if (in_array($key, array('total', 'subscribed', 'unsubscribed', 'no_email'))) {
      $row[$key] = number_format($value);
    }
  }
  $data[$i] = $row;
}
$header = array('Total', 'Subscribed', 'Unsubscribed', 'No Email');
echo theme('table', array('header' => $header, 'rows' => $data, 'attributes' => $theme_data['table_attributes']));
?>
<br />

