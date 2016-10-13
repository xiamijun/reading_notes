<?php
//抓取页面上的图片

$url="http://n.sinaimg.cn/history/transform/20161013/3pnH-fxwvpar7917097.jpg";
$data=file_get_contents($url);
$filepath="upload.jpg";
file_put_contents($filepath,$data) or die('不能写入');