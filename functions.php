<?php
// "HTTP/1.0 404 Not Found"
/*function status_header($code = 200) {
	$messages = [
		200 => "OK OK",
		500 => "Server Error"		
	];
	header("HTTP/1.0 ".$code. " ".$messages[$code]);


}
status_header(200);
*/

// [header => värde]
// connection: Upgrade;
function headers(array $headers = []) {
    foreach ($headers as $header => $value) {
    	header("$header: $value");		
    }
}

headers([
	"Connection" => "Upgrade"
]);

//function redirect($url, $code = 302) {}