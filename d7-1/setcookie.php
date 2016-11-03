<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//设置cookie的生成周期   setcookie
setcookie("username","zhangsan",time()+10);//设置username的生存周期为10秒
//默认cookie的存储路径是根目录，根目录下是的所有文件都是共享cookie信息

echo $_COOKIE['username'];

//setcookie("name","lisi",time()+60,"../../d/d6-3/setcookie.php");
//setcookie("name","lisi");

//setcookie("name","");//删除cookie
//var_dump($_COOKIE);
//setcookie("username","zhangsan",  time()-10);
//第三个参数为time（）减一个正的值也为删除cookie  设置生存时间小于当前时间

