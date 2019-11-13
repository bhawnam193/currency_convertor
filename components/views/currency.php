<?php  

$req_url = 'https://api.exchangeratesapi.io/latest?symbols='.$convertedCurrency.'&base='.$base;

$response_json = file_get_contents($req_url);

// Continuing if we got a result
if(false !== $response_json) {

    // Try/catch for json_decode operation
    try {

		$response_object = json_decode($response_json);
		$price = round(($value * $response_object->rates->$convertedCurrency), 2);

		echo  $price; 
    }
    catch(Exception $e) {
        return 'Error Occurred';
    }

}else{
	return 'Error Occurred';
}