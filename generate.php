<?php
	if(ISSET($_POST['generate'])){
		$array = [];
		$number = $_POST['number'];
		for($i=1; $i<=$number; $i++){
			array_push($array, $i);
			if ($i % 2 == 0){
				$even[]=$i;
			}
		}
?>
	<center><h4 class="text-warning">EVEN Numbers</h4></center>
<?php
	echo implode(", ", $even);
?>
</div>
 
<?php
	}
?>
