<?php 
function larger($x,$y){
	if (!isset($x) || !isset($y)) {
		return false;
	}
	if ($x>=$y) {
		return $x;
	}else{
		return $y;
	}
}

$a=1;
$b=2;
$c=3;

echo larger($a,$b);
var_dump(larger($c,$d));	//因为$d不存在，所以larger返回了false
echo '<br>';
var_dump(isset($e));
 ?>