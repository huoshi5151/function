<?php 
/**
 * html中的html代码如果被包含之后也会执行
 * 如果不想让被包含的文件里的php代码执行，可以使用readfile()函数
 * 
 *  
 *  */
// include('header.inc.html');
readfile('header.inc.html');
echo '这是主文件';
 ?>