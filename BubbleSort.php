<?php
//冒泡排序
//重复走访要排序的数列，依次比较两个元素
$array=[3,1,6,9,7];


for ($i=1;$i<count($array);$i++){
    for ($j=0;$j<count($array)-$i;$j++){
        if ($array[$j]>$array[$j+1]){
            $temp=$array[$j];
            $array[$j]=$array[$j+1];
            $array[$j+1]=$temp;

        }
    }
}
var_dump($array);

