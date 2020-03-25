<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bare - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style type="text/css" media="all">
	html, body {
		background-color: #fff;
		color: #636b6f;
		font-family: 'Nunito', sans-serif;
		font-weight: 200;
		height: 100vh;
		margin: 0;
	}
	.row div{
		border: 1px solid black;
	}
	.superbig{
		font-size: 200px;
		padding : 100 50 !important;
	}
	.big{
		font-size: 100px;
		padding : 100 50 !important;
	}
	.list {
		font-size : 50px;
	}
</style>

</head>

<body>
  <!-- Page Content -->
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8">
		<h2>Pasien Dipanggil</h2>
			<div id="nomor_antrian" class="superbig">A1</div>
		<h2>Poli Umum</h2>
      </div>
		<div class="col-lg-4">
			<h2>Pasien Diperiksa</h2>
			<div class="">
				<div class="list">A1 / 10</div>
				<div class="list">B2 / 10</div>
				<div class="list">C5 / 10</div>
				<div class="list">D9 / 10</div>
			</div>
      </div>
    </div>
	<div class="row text-center">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<h2>Pasien Diperiksa</h2>
				<div id="nomor_antrian" class="big">A1</div>
			<h2>Poli Umum</h2>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<h2>Pasien Diperiksa</h2>
				<div id="nomor_antrian" class="big">B2</div>
			<h2>Poli Gigi</h2>
			
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<h2>Pasien Diperiksa</h2>
				<div id="nomor_antrian" class="big">C5</div>
			<h2>Poli Kebidanan</h2>
			
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			<h2>Pasien Diperiksa</h2>
				<div id="nomor_antrian" class="big">D9</div>
			<h2>Poli Estetik</h2>
			
		</div>
	</div>
  </div>

  <!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
<script>
	// Enable pusher logging - don't include this in production
	Pusher.logToConsole = true;

	var pusher = new Pusher('281b6730814874b6b533', {
	  cluster: 'ap1',
	  forceTLS: true
	});
	var channel = pusher.subscribe('monitor-channel');
	channel.bind('monitor-submitted', function(data) {
		$('#nomor_antrian').html(data.text);
	});
</script>

</body>

</html>
