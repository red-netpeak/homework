<?php
  function array_fill_keys_func($array, $val) {
    if (!is_array($array)) die("not array");

    $result = array();
    foreach ($array as $key => $value) {
      $result[$value] = $val;
    }

    return $result;
  }

  $test = array(test1, test2, test3, test4, test5, test6);
  $value = 0;

  echo "Start values";
  var_dump($test, $value);

  echo "my function result";
  var_dump(array_fill_keys_func($test, $value));

  echo "php function result";
  var_dump(array_fill_keys($test, $value));
?>
