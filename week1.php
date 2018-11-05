<?php
//1-100的和循环
function Sum($sum){
    
    for($i=1;$i<=100;$i++){
        $sum = $sum+$i;
    }
    return $sum;
}
echo (Sum($sum=0));
echo "<br/>";
//1-100的和循环
function DOsum($sum){
    $i=1;
    do{
        $sum = $sum+$i;
        $i++;
    }while($i<=100);
    return $sum;
}
echo (Dosum($sum=0));
echo "<br/>";
//1-100的和循环
function Wsum($sum){
    $i=1;
    while($i<=100){
        $sum = $sum+$i;
        $i++;
    }
    return $sum;
}
echo (Wsum($sum=0));

echo "<br/>";
//阶乘循环
function Njie($n){
    $i=1;
    $sum=1;
   while($i<=$n){
       $sum*=$i;
       $i++;
   }
   return $sum;
}
$n=3;
echo (Njie($n));

echo "<br/>";
//阶乘递归
function Ngui($n){
    $i=1;
    $sum=1;
    if($n==0){
        return 1;
    }else{
       return Ngui($n-1)*$n;
    }
}
$n=3;
echo (Ngui($n));

echo "<br/>";
//判断回文字符串
function Ishui($str){
    $len = strlen($str);
    $l=1;
    $k = intval($len/2)+1;
    for($i=0;$i<$k;$i++){
        if(substr($str,$i,1)!=substr($str,$len-$i-1,1)){
            $l=0;
            break;
        }
    }
    if($l==1){
        return "yes";
    }else{
        return "no";
    }
}

$str="1221";
echo (Ishui($str));
echo "<br/>";

//定义Person类
Class Person{
    public $name,$age;
}
//定义Walk接口类
interface Walk{

}
//定义Student类
class Student extends Person{
    public function Obj1(){}
    public function Obj2(){}
    public function Obj3(){}
    public function Obj4(){}
    public function Obj5(){}
    public function Obj6(){}
    public function Obj7(){}
    public function Obj8(){}
}  
$obj1 = new Obj1;
$obj2 = new Obj2;
$obj3 = new Obj3;
$obj4 = new Obj4;
$obj5 = new Obj5;
$obj6 = new Obj6;
$obj7 = new Obj7;
$obj8 = new Obj8;
?>