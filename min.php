<?php
  function min_func($array) {
    if (!is_array($array)) die("not array");

    $min = $array[0];

    for ($i = 0; $i < count($array); $i++) {
      if ($min > $array[$i]) {
        $min = $array[$i];
      }
    }

    return $min;
  }

  $test = array(2, 5, 3, 6, 1);

  echo  "Start array";
  var_dump($test);

  echo "my function result";
  var_dump(min_func($test));

  echo "php function result";
  var_dump(min($test));
?>
