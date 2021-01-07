<?php

//杨辉三角
function P($line){
    $temp=[];
    for ($i=1;$i<=$line;$i++){
        for ($j=1;$j<=$i;$j++){
            if ($j==1||$j==$i){
                $temp[$i][$j]=1;
            }else{
                $temp[$i][$j]=$temp[$i-1][$j-1]+$temp[$i-1][$j];
            }
            echo $temp[$i][$j];
            echo "  ";
        }
        echo "\r\n";
    }
}
P(10);