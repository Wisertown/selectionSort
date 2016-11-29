<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1); 
$arr = [4, 7, 1, 3, 19, 10];
$count = 6;
print_r($arr);
$newArr = array();
	end($arr);


function create_number_array($num){
	$arr = array();
	if(!is_int($num) && $num < 1){
		return "You need a whole number that is greater than 1!";
	}
	$num = round($num);
	for($i = 1; $i <= $num; $i++){
		array_push($arr, rand(1, 100));
	}
	return $arr;
}

function SortPlease($arr){
		end($arr);
		$lastKey = key($arr);
	for($p = 0; $p < count($arr); $p++){
		if($p == $lastKey){
			break;
		}
		if($arr[$p] > $arr[$p+1]){
			echo "<br>";
			echo "p = " . $p;
			echo "arrayval = " . $arr[$p];
			$temp = $arr[$p];
			$arr[$p] = $arr[$p+1];
			$arr[$p+1] = $temp;
			$p = ($p == 0?$p - 1:$p - 2);
			echo "<pre>";
			print_r($arr);
			echo "</pre>";
	
			echo "which means next up =" . $arr[$p+1];

		} else {
			continue;
		}
	}
}
$check = create_number_array(6);
echo "<pre>";
print_r(SortPlease($check));
echo "</pre>";
echo "YES!";

/*
function sortnow($newArr){
	for($p = 0; $p < count($newArr); $p++){
		if($newArr[$p] > $newArr[$p+1]){
			echo "p = " . $p;
			echo "arrayval = " . $newArr[$p];
			$temp = $newArr[$p];
			$newArr[$p] = $newArr[$p+1];
			$newArr[$p+1] = $temp;
			$p = ($p > 1?$p - 2:$p-1);
			echo "<pre>";
			print_r($newArr);
			echo "</pre>";
		} else {
			continue;
		}
	}
	return $newArr;
}


function sortit($array){
$newArr = $array;
for($x = count($array)-1; $x <= -1; $x--){
	print_r($array);
		if($array[$x] > $array[$x-1]){
			continue;
		} else {
			return sortnow($newArr);
			

		}
	}
	return $newArr;
}
print_r(sortit($arr));*/
?>