<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if($_POST['time']==$_COOKIE['time']){
    echo"表单提交成功";
    setcookie("time","");
}  else {
    echo "表单已提交，不要重复提交";
}
