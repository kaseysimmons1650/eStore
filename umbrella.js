
function umbrella(){
	var form = document.getElementById("weather");
	var tempUnit = form.unit.value;
	var degrees = form.temp.value;
	var raining = form.rain.value;
	var rain;
	var convertedTemp;
	var jacket;

	if(raining == "yes"){
		rain = "You should bring an umbrella.";
	}
	else{
		rain = "You do not need to bring an umbrella.";
	}

	if(tempUnit == "fahrenheit"){
		convertedTemp = ((degrees - 32) * (5/9)) + " degrees celsius";
	}

	else if(tempUnit == "celsius"){
		convertedTemp = ((degrees * (9/5)) + 32) + " degrees fahrenheit"; 

	}

	if(tempUnit == "fahrenheit" && degrees <= 60){
		jacket = "You should wear a jacket.";
	}
	else if(tempUnit == "fahrenheit" && degrees > 60){
		jacket = "You do not need to wear a jacket.";
	}
	else if(tempUnit == "celsius" && degrees <= 15.5){
		jacket = "You should wear a jacket.";
	}
	else if(tempUnit == "celsius" && degrees > 15.5){
		jacket = "You do not need to wear a jacket.";
	}



	alert("Converted temperature: " + convertedTemp + "\n" + rain + "\n" + jacket);

}