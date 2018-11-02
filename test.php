<?php
function getpao($arr){
   $count = count($arr);
   $temp=0;
   for($i=0;$i<$count;$i++){
       for($j=0;$j<$count-$i-1;$j++){
           if($arr[$j]>$arr[$j+1]){
               $temp = $arr[$j];
               $arr[$j]=$arr[$j+1];
               $arr[$j+1]=$temp;
           }
       }
   }
   return $arr;
}
$arr = array(8,2,6,9,7,1,5,10);
$res = getpao($arr);
echo "<pre/>";
print_r($res);
?>