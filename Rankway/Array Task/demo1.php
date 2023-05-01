<?php
$key = ["I'd", "fname", "lname"];
$value = [[3,4,5],[50,60,70]];

$result = array();
for ($i = 0; $i < count($value); $i++) {
  $row = array();
  for ($j = 0; $j < count($key); $j++) {
    $row[$key[$j]] = $value[$i][$j];
  }
  $result[] = $row;
}
echo "<pre>";
print_r($result);
?>