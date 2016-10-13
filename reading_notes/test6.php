<?php
//函数里面的变量，外面不能用；函数外面的变量，里面不能用。除非用global声明。

$globalName='wai';
function getVar(){

    $localName='nei';
    echo "hello,{$localName}<br/>";
    $globalName='xin';
    echo "hello,{$globalName}<br/>";
}
getVar();
