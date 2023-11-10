<?php

$sql = "SELECT * FROM tb_book order by date_time DESC"; 
$query = $mysqli->query($sql);
if($query){

    while($result = $query->fetch_assoc()){
		$rows[] = $result;
	}
	
}else{
    
	$rows = 'null';
}

?>