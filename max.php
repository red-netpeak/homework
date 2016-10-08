<?php
  function max_func($array) {
    if (!is_array($array)) die("not array");

    $max = $array[0];

    for ($i = 0; $i < count($array); $i++) {
      if ($max < $array[$i]) {
        $max = $array[$i];
      }
    }

    return $max;
  }

  $test = array(1, 2, 1, 6, 6);

  echo "Start array";
  var_dump($test);

  echo "my function result";
  var_dump(max_func($test));

  echo "php function result";
  var_dump(max($test));
?>
