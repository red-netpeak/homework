<?php
  function array_chunk_func($array, $val) {
    if (!is_array($array)) die("not array");

    $tmp = count($array);
    $result = array();
    $length = ceil($tmp / $val);
    $i = 0;
    $j = 0;
    $k = 0;

    while($length > 0) {
      $temp = array();

      for ($j = 0; $j < $val; $j++) {
        if (NULL === $array[$i]) break;
        $temp[$j] = $array[$i];
        $i++;
      }

      $result[$k] = $temp;
      $k++;
      $length--;
    }

    return $result;
  }

  $test = array(1, 7, 2, 5, 1, 8, 3);
  $parts = 3;

  echo "Start values";
  var_dump($test, $parts);

  echo "My function result";
  var_dump(array_chunk_func($test, $parts));

  echo "php function result";
  var_dump(array_chunk($test, $parts));
?>
