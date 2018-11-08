<?php
function LastRemaining_Solution($n,$m){
    $last=0;
    if($n==0 || $m==0){
        return -1;
    }else{
        for($i=1;$i<$n;$i++){
            $last = ($last+$m)%$i;
        }
        return $last;
    }
}
echo LastRemaining_Solution(4,5);
?>