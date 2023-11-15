<?php

$sql = "SELECT * FROM tb_payment left join tb_member on  tb_payment.id_member = tb_member.id_member order by tb_payment.create_datetime DESC"; 
$query = $mysqli->query($sql);
if($query){

    while($result = $query->fetch_assoc()){
		$rows[] = $result;
	}
	
}else{
    
	$rows = 'null';
}

?>