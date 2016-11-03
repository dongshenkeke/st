<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$data=$_POST;
if(empty($data['username'])){
    echo"用户名不能为空";
    exit;
}else{
    if($data['username']=='张三'){
        echo "1";
        exit;//exit();   两种写法都正确
    }
//    else{
//        echo "2";
//        //exit;
//    }
    
}
