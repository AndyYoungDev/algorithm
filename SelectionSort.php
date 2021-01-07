<?php
//选择排序
//实现思路 双重循环完成，外层控制轮数，当前的最小值。内层控制比较次数
$array=[11,12,6,3,7];


for ($i=0;$i<count($array);$i++){
    echo "第{$i}\r\n";
    for ($j=$i+1;$j<count($array);$j++){

        var_dump($array);


        if ($array[$i]>$array[$j]){
            $temp=$array[$i];
            $array[$i]=$array[$j];
            $array[$j]=$temp;
        }
    }

}
var_dump($array);die;
