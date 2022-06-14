<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<title>DALL·E mini - Retryable Edition</title>
	</head>
	<body>
		<br>
		<div class="container text-center text-light">
			<h1 class="">DALL·E mini</h1>
			<p>DALL·E mini is an AI model that generates images from any prompt you give! Now with auto-retrying!</p>
		</div>
		
		<div class="container">
			<div id="main" class="mt-4 p-5 text-light rounded">
				<div class="input-group mb-3">
					<input type="text" id="query" class="form-control text-light" placeholder="" aria-label="" aria-describedby="run" readonly>
					<button class="btn btn-lg text-light btn-outline-secondary" type="button" id="run" disabled>Run</button>
				</div>
				<div class="row text-center">
					<div class="col-md-4">
						<img id="img_0" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
					<div class="col-md-4">
						<img id="img_1" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
					<div class="col-md-4">
						<img id="img_2" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4">
						<img id="img_3" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
					<div class="col-md-4">
						<img id="img_4" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
					<div class="col-md-4">
						<img id="img_5" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4">
						<img id="img_6" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
					<div class="col-md-4">
						<img id="img_7" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
					<div class="col-md-4">
						<img id="img_8" src="https://via.placeholder.com/256" class="result-img img-thumbnail">
					</div>
				</div>
			</div>
			<hr>
			<div id="logs" class="mt-4 p-5 text-light rounded">
				<div class="mb-3">
					<textarea class="form-control" id="logs_box" rows="15" readonly></textarea>
				</div>
			</div>
			<hr>
			<div id="footer" class="footer text-light rounded">
				<div class="row text-center">
					<div class="col-md-6">
						<p>This website is effectively wrapping around <a href="https://hf.space/static/dalle-mini/dalle-mini/index.html" target="_blank">dalle-mini</a></p>
					</div>
					<div class="col-md-6">
						<p>You can find the source code at <a href="https://github.com/swiftyspiffy/dalle-mini-retry-website" target="_blank">github</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>