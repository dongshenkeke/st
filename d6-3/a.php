<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$str4="hello world";
echo str_replace("world","lucy",$str4);
echo '<br>';
$arr=array(
    "red",
    "white",
    "blue"
);
$r_arr=str_replace("red","Black",$arr);
var_dump($r_arr);
echo '<br>';
$r_arr1=  str_ireplace("RED","Yello",$arr);
var_dump($r_arr1);
echo '<br>';

$str111="abcdefghijk";
echo substr_replace($str111,"hello",3);
echo '<br>';
echo substr_replace($str111,"hello",3,2);
echo '<br>';

$number="1008611";
echo number_format($number,2);
echo '<br>';
echo number_format($number , 2 , "." , "-");
echo '<br>';

$num2=0.91;
        print("阿德斯的整数;d%,$num2");
        echo '<br>';
$num3=234;
printf("%.2f",$num3);
echo '<br>';
$num4=3233.4;
printf("%.3f" , $num4);
echo '<br>';
printf("%s-%s%s" , "ab" , "cd" , "ef");
echo '<br>';
printf("a+b=%d",2.1+2.4);
echo '<br>';
printf("a+b=%s",5.23+1);
echo '<br>';

echo str_repeat(123, 2);
echo '<br>';
echo strrev("abcd");
echo '<br>';
$str="hello world";
$str1=explode(" ",$str);
var_dump($str1);
echo '<br>';
$str2= implode(",", $str1);
echo $str2;
echo '<br>';
$pass="123123";
echo md5($pass."zy");
echo '<br>';
echo sha1(md5($pass."zy"));
echo '<br>';
echo substr($str,1,6);
echo '<br>';
echo substr($str, 2);
echo '<br>';
$str3="中华人民共和国";
echo mb_substr($str3,2);
echo '<br>';
$str55="abcdefg";
$str66=$str55.$str55;
echo $str66."<br>";
$str77="  123";
echo "--" . trim($str77) . "--" . "<br>";
echo "--" . trim($str77,"3") . "--" . "<br>";
$str9=" abc ffg ";
echo "--".ltrim($str9)."--"."<br>";
$str7="nihao hello world";
echo ltrim($str7,"ni");
echo '<br>';
echo "--".rtrim($str9)."--"."<br>";
$str10="asd";
echo ucfirst($str10)."<br>";
$str11="hello rr";
echo ucwords($str11)."<br>";
$str12=  strtoupper($str11);
echo $str12."<br>";
echo strtolower($str12)."<br>";
$str13="hello'\@\n\"world";
echo $str13."<Br>";
echo addslashes($str13)."<br>";
echo stripslashes($str13)."<br>";
echo addcslashes($str13,"hello")."<br>";
$arr14=array(1,2,3);
list($o,$p,$q)=$arr14;
echo $o."<br>";
echo $p."<br>";
echo $q."<br>";
echo implode(",", $arr14);
echo '<br>';
$arr51=  explode(",", implode(",", $arr14));
var_dump($arr51);
echo '<br>';
var_dump(array_search(3, $arr14));
echo '<br>';
var_dump(array_search("3", $arr14,true));
echo '<br>';
var_dump(array_key_exists(2, $arr14));
echo '<br>';
$arr15=['a'=>1,'b'=>2,'c'=>3];
var_dump(array_keys($arr15));
echo '<br>';
var_dump(array_values($arr15));
echo'<br>';
var_dump(array_rand($arr15,2));
echo '<br>';
var_dump(array_slice($arr15, 0,3));
echo '<br>';
$arr16=array('d'=>'red','orange','blue');
$arr17=array('d'=>'white','black','1','2','3');
var_dump(array_replace($arr17, $arr16));
echo'<br>';
var_dump(array_replace_recursive($arr16, $arr17));
echo '<br>';
echo '---------------------';
echo '<br>';
var_dump(array_replace_recursive($arr17, $arr16));
echo '<br>';
array_pop($arr16);
var_dump($arr16);
echo '<br>';
array_push($arr17, "985211");
var_dump($arr17);
echo '<br>';
array_unshift($arr16, "666666");
var_dump($arr16);
echo '<br>';
$arr18=array('e'=>'234','456','357');
array_shift($arr18);
var_dump($arr18);
echo '<br>';
$arr88=array('e'=>'234' , '567' , '678');
$arr99=array('f'=>'2' , '89' , 1=>'f' , '567' , 'g'=>'3' , '567');
var_dump(array_unique($arr99));
echo '<br>';
var_dump(array_merge($arr99,$arr88));
echo '<br>';
var_dump(array_flip($arr88));
echo '<br>';


