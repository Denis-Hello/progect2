<?php

function numPos($num1, $num2){
  if(($num1 - 1) === $num2 || ($num2 - 1) === $num1){
   return 'Числа последовательны';
  } else {
    return 'Числа не последовательны';
  }
}


function pairs(array $arr) {
$totalPairs = 0;
$pairsArray = array_chunk($arr, 2);
return $pairsArray;

}

var_dump(pairs([1,2,3,4,5,6,5,7]));

echo "Hello World";

?>