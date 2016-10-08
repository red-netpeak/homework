<?php
  function array_reverse_func($array) {
    if (!is_array($array)) die("not array");

    $result = array();
    $j = 0;

    for ($i = count($array) - 1; $i >= 0; $i--) {
      $result[$j] = $array[$i];
      $j++;
    }

    return $result;
  }

  $test = array(1, 2, 3, 4, 5, 6);

  echo "Start array";
  var_dump($test);

  echo "my function result";
  var_dump(array_reverse_func($test));

  echo "php function result";
  var_dump(array_reverse($test));
?>
