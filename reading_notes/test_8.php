<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2016/10/13
 * Time: 20:43
 */
function getUserInfo(){
    return 'xiejun';
}

function showShopCart(){
    return '10';
}

//echo "欢迎".getUserInfo().",购物车商品数量：".showShopCart();//实际上运行3次
echo "欢迎",getUserInfo(),",购物车商品数量：",showShopCart();//性能调优