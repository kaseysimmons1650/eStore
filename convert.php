<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/~ksimmon1/CSS/project1.css">
<body>
	<?php 

	$start = $_GET['starting'];
	$end = $_GET['ending'];
	$amt = $_GET['startAmt'];

	if($start == "USD" and $end == "USD"){
		echo "Conversion: ". $amt ." ". $start . " = " . $amt ." ". $end;
	}
	elseif($start == "USD" and $end == "Euro"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 1.01) ." ". $end;
	}
	elseif($start == "USD" and $end ==  "GBP"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 0.89) ." ". $end;
	}
	elseif($start == "USD" and $end == "CAD"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 1.37) ." ". $end;
	}
	elseif($start == "Euro" and $end == "Euro"){
		echo "Conversion: ". $amt ." ". $start . " = " . $amt ." ". $end;
	}
	elseif($start == "Euro" and $end == "USD"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 0.99) ." ". $end;
	}
	elseif($start == "Euro" and $end == "GBP"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 0.87) ." ". $end;
	}
	elseif($start == "Euro" and $end == "CAD"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 1.35) ." ". $end;
	}
	elseif($start == "GBP" and $end == "USD"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 1.13) ." ". $end;
	}
	elseif($start == "GBP" and $end == "Euro"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 1.15) ." ". $end;
	}
	elseif($start == "GBP" and $end == "GBP"){
		echo "Conversion: ". $amt ." ". $start . " = " . $amt ." ". $end;
	}
	elseif($start == "GBP" and $end == "CAD"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 1.54) ." ". $end;
	}
	elseif($start == "CAD" and $end == "USD"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 0.73) ." ". $end;
	}
	elseif($start == "CAD" and $end == "Euro"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 0.74) ." ". $end;
	}
	elseif($start == "CAD" and $end == "GBP"){
		echo "Conversion: ". $amt ." ". $start . " = " . ($amt * 0.65) ." ". $end;
	}
	elseif($start == "CAD" and $end == "CAD"){
		echo "Conversion: ". $amt ." ". $start . " = " . $amt ." ". $end;
	}

	?>

</body>
</head>
</html>