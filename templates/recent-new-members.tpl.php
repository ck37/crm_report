<h3 style="<?php echo $theme_data['header_style'] ?>">Daily Member Growth</h3>
<?php
foreach ($data as $i => $row) {
  $row['net_change'] = $row['total_new'] - $row['unsubscribed'];
  if ($i == 0) {
    $row['subscribed'] = $overall['subscribed'];
  }
  else {
    $row['subscribed'] =  intval(str_replace(',', '', $data[$i - 1]['subscribed'])) - intval(str_replace(',', '', $data[$i - 1]['net_change']));
  }
  foreach ($row as $key => $value) {
    if (in_array($key, array('total_new', 'unsubscribed', 'net_change', 'subscribed'))) {
      $row[$key] = number_format($value);
    }
  }
  $data[$i] = $row;
}
$header = array('Date', 'New', 'Unsubscribed', 'Net Change', 'Subscribed');
echo theme('table', array('header' => $header, 'rows' => $data, 'attributes' => $theme_data['table_attributes']));
?>
<br />
