<?php

function wave($people){
    $result = [];
    $arr = str_split($people);
    $j = 0;
    while ($j < count($arr)) {
        if ($arr[$j] !== ' ') {
            $arr[$j] = strtoupper($arr[$j]);
            $result[] = implode('', $arr);
            $arr = str_split($people);
        }
        $j++;
    }
    return $result;
}

print_r(wave(" gap "));


//function wave($people){
   // $result = [];

   // for($i = 0; $i < strlen($people); $i++) {
   //     if(ctype_space($people[$i])) continue;
  //      $result[] = substr_replace($people, strtoupper($people[$i]), $i, 1);
 //   }
 //   return $result;
//}