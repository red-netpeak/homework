<?php
  function array_reverse_func($array, $flag) {
    if (!is_array($array)) die("not array");

    $result = array();

    if (true == $flag || !is_numeric(key($array))) {
      $tmpkey = array();
      $tmpvalue = array();
      $i = 0;

      foreach ($array as $key => $value) {
        $tmpkey[$i] = $key;
        $tmpvalue[$i] = $value;
        $i++;
      }

      $i--;
      for ($i; $i >=0; $i--) {
        $result[$tmpkey[$i]] = $tmpvalue[$i];
      }
    }
    else {
        $j = 0;
        for ($i = count($array) - 1; $i >= 0; $i--) {
          $result[$j] = $array[$i];
          $j++;
        }
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
