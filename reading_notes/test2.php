<?php
//静态变量实现函数内值的累加
function create(){
    static $num=0;
    return ++$num;
}

echo create().' created<br/>';
echo create().' created<br/>';
echo create().' created<br/>';
