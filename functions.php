<?php

	//This function gets data of an specific character from the starwars Api Using cUrl and returns the response
	function get_character_info($character_id){

		$header = array(
	    "Content-Type: application/json"
		);

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, "https://swapi.dev/api/people/$character_id");
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "GET" );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

		$response = curl_exec($ch);
		$err = curl_error($ch);

		curl_close($ch);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}

	//This function gets all the data of characters from the starwars Api Using cUrl and returns the response
	function get_all_character_info(){

		$header = array(
	    "Content-Type: application/json"
		);

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, "https://swapi.dev/api/people/");
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "GET" );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

		$response = curl_exec($ch);
		$err = curl_error($ch);

		curl_close($ch);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}

?>