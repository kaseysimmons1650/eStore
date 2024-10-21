

function calculate(){

	var form = document.getElementById("money");
	var starting = form.starting.value;
	var startAmt = form.startAmt.value;
	var ending = form.ending.value;
	var conversionAmt = 0.00;
	var conversion = 0.00;


	if(starting == "USD" && ending == "USD"){
		conversionAmt = startAmt;
		conversion = conversionAmt + " USD";
	}
	else if(starting == "USD" && ending == "Euro"){
		conversionAmt = startAmt * 1.01;
		conversion = conversionAmt + " Euro"
	}
	else if(starting == "USD" && ending == "GBP"){
		conversionAmt = startAmt * 0.89;
		conversion = conversionAmt * " GBP";
	}
	else if(starting == "USD" && ending == "CAD"){
		conversionAmt = startAmt * 1.37;
		conversion = conversionAmt + " CAD";
	}
	else if(starting == "Euro" && ending == "Euro"){
		conversionAmt = startAmt;
		conversion = conversionAmt + " Euro";
	}
	else if(starting == "Euro" && ending == "USD"){
		conversionAmt = startAmt * 0.99;
		conversion = conversionAmt + " USD";
	}
	else if(starting == "Euro" && ending == "GBP"){
		conversionAmt = startAmt * 0.87;
		conversion = conversionAmt + " GBP"
	}
	else if(starting == "Euro" && ending == " CAD"){
		conversionAmt = startAmt * 1.35;
		conversion = conversionAmt + " CAD";
	}
	else if(staring == "GBP" && ending == "USD"){
		conversionAmt = startAmt * 1.13;
		conversion = conversionAmt + " USD";
	}
	else if(starting == "GBP" && ending =="Euro"){
		conversionAmt = startAmt * 1.15;
		conversion = conversionAmt + " Euro";
	}
	else if(staring == "GBP" && ending == "GBP"){
		conversionAmt = startAmt;
		conversion = conversionAmt + " GBP";
	}
	else if(staring == "GBP" && ending == "CAD"){
		conversionAmt = startAmt * 1.54;
		conversion = conversionAmt + " CAD";
	}
	else if(starting == "CAD" && ending == "USD"){
		conversionAmt = startAmt * 0.73;
		conversion = conversionAmt + " USD";
	}
	else if(starting == "CAD" && ending == "Euro"){
		conversionAmt = startAmt * 0.74;
		conversion = conversionAmt + " Euro";
	}
	else if(starting == "CAD" && ending == "GBP"){
		conversionAmt = startAmt * 0.65;
		conversion = conversionAmt + " GBP";
	}
	else if(starting == "CAD" && ending == "CAD"){
		conversionAmt = startAmt;
		conversion = conversionAmt + " CAD";
	}
	else{
		conversion = "error";
	}

	alert("Conversion: " + conversion);

}

