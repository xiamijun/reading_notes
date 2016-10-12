<?php
//多维数组排序
$a=array(
    array('sky','4'),
    array('apple','2'),
    array('tree','1'),
);

function my_compare($a,$b){
    if($a[1]<$b[1]){
        return -1;
    }else if($a[1]==$b[1]){
        return 0;
    }else{
        return 1;
    }
}

usort($a,'my_compare');

foreach($a as $elem){
    echo "$elem[0] : $elem[1]<br/>";
}