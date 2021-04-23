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
	.row div{
		border: 1px solid black;
	}
	.superbig{
		font-size: 100px;
		padding : 100 50 !important;
	}
	.big{
		font-size: 50px;
		padding : 100 50 !important;
	}
	.list {
		font-size : 25px;
	}
	.full-height
	{
		height: 100%;
	}
	html, body {
		background-color: #fff;
		color: #636b6f;
		font-family: 'Nunito', sans-serif;
		font-weight: 200;
		height: 100vh;
		margin: 0;
	}
	.row{
		overflow: hidden; 
	}

    .container{
        max-width: 370px;
    }

	[class*="col-"]{
		margin-bottom: -99999px;
		padding-bottom: 99999px;
	}
</style>

</head>

<body>
  <!-- Page Content -->
  <div class="container">
    <div class="row text-center">
		<div class="col-xs-8 no-float">
			<h2>Pasien Dipanggil</h2>
				<div id="nomor_panggilan" class="superbig">-</div>
			<h2 id="poli_panggilan">-</h2>
		</div>
		<div class="col-xs-4 full-height">
			<h2>Pasien Diperiksa</h2>
			<div>
				<div class="list"><span id="nomor_poli_umum">-</span>/<span id="jumlah_poli_umum">-</span></div>
				<div class="list"><span id="nomor_poli_gigi">-</span>/<span id="jumlah_poli_gigi">-</span></div>
				<div class="list"><span id="nomor_poli_bidan">-</span>/<span id="jumlah_poli_bidan">-</span></div>
				<div class="list"><span id="nomor_poli_estetik">-</span>/<span id="jumlah_poli_estetik">-</span></div>
			</div>
		</div>
    </div>
	<div class="row text-center">
		<div class="col-xs-3 no-float">
			<h2>Pasien Diperiksa</h2>
				<div id="antrian_terakhir_poli_umum" class="big">-</div>
			<h2>Poli Umum</h2>
		</div>
		<div class="col-xs-3 no-float">
			<h2>Pasien Diperiksa</h2>
			<div id="antrian_terakhir_poli_gigi" class="big">-</div>
		<h2>Poli Gigi</h2>
		
	</div>
	<div class="col-xs-3 no-float">
		<h2>Pasien Diperiksa</h2>
			<div id="antrian_terakhir_poli_bidan" class="big">-</div>
		<h2>Poli Kebidanan</h2>
		
	</div>
	<div class="col-xs-3 no-float">
		<h2>Pasien Diperiksa</h2>
			<div id="antrian_terakhir_poli_estetik" class="big">-</div>
		<h2>Poli Estetik</h2>
	</div>
</div>
<div class="row">
	<div class="col-xs-3 col-sm-12 col-md-12 col-lg-12">
	</div>
</div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
<script>
// Enable pusher logging - don't include this in production
	var channel_name = 'my-channel';
	var event_name   = 'form-submitted';

	Pusher.logToConsole = true;

	var pusher = new Pusher('7d5ef12846803696f64d', {
	  cluster: 'ap1',
	  forceTLS: true
	});

	var channel = pusher.subscribe(channel_name);
	channel.bind(event_name, function(data) {
		var panggilan = data.text.panggilan;
		var dt = data.text.data;
		var antrian_terakhir_per_poli = data.text.antrian_terakhir_per_poli;

		$('#nomor_panggilan').html(panggilan.nomor_antrian);
		$('#poli_panggilan').html(panggilan.poli);

		$('#nomor_poli_umum').html(dt[1].nomor_antrian_terakhir);
		$('#jumlah_poli_umum').html(dt[1].jumlah);
		$('#nomor_poli_gigi').html(dt[2].nomor_antrian_terakhir);
		$('#jumlah_poli_gigi').html(dt[2].jumlah);
		$('#nomor_poli_bidan').html(dt[3].nomor_antrian_terakhir);
		$('#jumlah_poli_bidan').html(dt[3].jumlah);
		$('#nomor_poli_estetik').html(dt[4].nomor_antrian_terakhir);
		$('#jumlah_poli_estetik').html(dt[4].jumlah);

		$("#antrian_terakhir_poli_umum").html(antrian_terakhir_per_poli[1]);
		$("#antrian_terakhir_poli_gigi").html(antrian_terakhir_per_poli[2]);
		$("#antrian_terakhir_poli_bidan").html(antrian_terakhir_per_poli[3]);
		$("#antrian_terakhir_poli_estetik").html(antrian_terakhir_per_poli[4]);
	});

	function getChannelName(){
		@if( gethostname() == 'Yogas-Mac.local' )
			var channel_name = 'my-channel2';
		@else
			var channel_name = 'my-channel';
		@endif
		return channel_name;
	}
</script>

</body>

</html>
