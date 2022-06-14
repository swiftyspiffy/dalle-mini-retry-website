<?
header('Content-Type: application/json');

if(!isset($_GET['query'])) {
	fail("no query");
}

$resp = performRequest($_GET['query']);
if($resp == null) {
	fail("error!");
}
$json = json_decode($resp, true);
success($json['images']);


function performRequest($query) {
	try {
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, "https://bf.dallemini.ai/generate");
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode(array('prompt' => $query)));
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		if($httpcode == "503HTTP/1.1 503 SERVICE UNAVAILABLE") {
			return null;
		} else {
			return $result;
		}
		return $result;		
	} catch(Exception $x) {
		return null;
	}
}

function fail($msg) {
	exit(json_encode(array('successful' => false, 'message' => $msg)));
}

function success($msg) {
	exit(json_encode(array('successful' => true, 'message' => $msg)));
}
?>