<?php

$sql = "SELECT * FROM tb_book_category order by id_book_cate DESC"; 
$query = $mysqli->query($sql);
if($query){
    while($result = $query->fetch_assoc()){
		$rows[]=$result;
	}
}else{
    
	$rows = 'null';
}

?>