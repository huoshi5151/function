<?php 
function create_table($data){
	echo "<table border=\"1\">";
	reset($data);
	$value=current($data);
	while ($value) {
		echo "<tr><td>$value</td></tr>\n";
		$value=next($data);
	}
	echo "</table>";
}
$my_arr=array('line one','line two','line three');
create_table($my_arr);

function create_table2($data,$border=1,$cellpadding=4,$cellspacing=4){
	echo "<table border=\"".$border."\" cellpadding=\"".$cellpadding."\" cellspacing=\"".$cellspacing."\">";
	reset($data);
	$value=current($data);
	while ($value) {
		echo "<tr><td>$value</td></tr>\n";
		$value=next($data);
	}
	echo "</table>";
}

create_table2($my_arr,4,8,8);
 ?>