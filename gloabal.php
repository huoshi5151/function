<?php 
function increment($value,$amount=1){
	global $value;		//这里使用了global关键字
	$value+=$amount;
}
$value=10;
echo $value.'<br>';
increment($value);
echo $value;


function increment1(&$value1,$amount=1){	//这里使用了引用传递，关键字：&
	$value1+=$amount;
}
$value1=10;
echo $value1.'<br>';
increment1($value1);
echo $value1;
 ?>