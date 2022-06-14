const API_ENDPOINT = "https://mywebsite.com/dalle/api.php";

window.onload = function() {
	$('#run').bind("click", function() {
		$('#run').attr("disabled", true);
		$('#query').attr("readonly", true);
		handleRun();
	});
	
	$('#run').attr("disabled", false);
	$('#query').attr("readonly", false);
	log("Page ready!");
};

function handleRun(isRetry = false) {
	const query = $('#query').val();
	if(!isRetry) {
		log('New query submitted: "' + query + '"');
	} else {
		log('Retrying query: "' + query + '"');
	}
	if(query.length < 1) {
		alert("query must not be empty");
	}
	runQuery(query, handleQuerySuccess, handleQueryFailure);
}

function runQuery(query, successCallback, failCallback) {
	$.ajax({
		type: "GET",
		url: API_ENDPOINT + "?query=" + query,
		data: {
			prompt: query
		},
		success: successCallback,
		error: failCallback
	});
}

function handleQuerySuccess(resp) {
	// check for 200 status code on failure
	if(!resp.successful) {
		handleQueryFailure();
		return;
	}
	log("Query successful! Found " + resp['message'].length + " images. Populating images!");
	for(var i = 0; i < 9; i++) {
		setImg(i, resp['message'][i]);
	}
	$('#run').attr("disabled", false);
	$('#query').attr("readonly", false);
}

function handleQueryFailure() {
	log("Query failed, retrying in 2 seconds...");
	setTimeout(() => {  handleRun(true); }, 2000);
}

function log(msg) {
	const currentTime = new Date();
	const existing = $('#logs_box').val();
	const newLogs = "[" + currentTime.getHours() + ":" + currentTime.getMinutes() + ":" + currentTime.getSeconds() + "] " + msg + "\n" + existing;
	$('#logs_box').val(newLogs);
}

function setImg(id, src) {
	$('#img_' + id).attr("src", "data:image/png;base64," + src);
}