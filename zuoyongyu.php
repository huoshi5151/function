<?php 
function fn(){
	global $var;
	 $var='content';

}
fn();	//调用了函数之后，变量就生效了
echo $var;

 ?>