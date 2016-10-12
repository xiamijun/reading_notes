<?php
//读取文件每一行
$lines=file('file.txt');
foreach($lines as $line_num=>$line){
    echo "Line #$line_num: ".$line."<br/>";
}