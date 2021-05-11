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
	* {
		box-sizing: border-box;
		text-align: center;
		background-color: #3BAE85;
	}
	.column2 {
	  float: left;
	  width: 20%;
	}

	/* Clear floats after the columns */
	.row2:after {
	  content: "";
	  display: table;
	  clear: both;
	}

	/* Create two unequal columns that floats next to each other */
	.column {
		float: left;
	}

	.left {
		width: 70%;
	}

	.right {
		width: 30%;
	}
	.row {
		display: flex; 
		align-items: stretch;
		overflow: hidden; 
		padding:  0px 15px;
	}

	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: flex;
		clear: both;
	}
	.row div, .row2 div{
	}
	#dipanggil{
		background-color: #ffffff;
		border-radius: 25px;
		padding: 10px 25px;
		width: 30%;
		margin : 0px auto;
	}
	.big{
		font-size: 40px;
		padding : 50 25 !important;
		border-radius: 10px;
		background-color: #fff;
		width: 70%;
		margin : 0 auto;
		font-weight: 900;
	}
	.list {
		font-size : 25px;
	}
	.full-width {
		width: 100%;
	}
	html, body {
		background-color: #fff;
		color: #636b6f;
		font-family: 'Nunito', sans-serif;
		font-weight: 200;
		height: 100vh;
		margin: 0;
	}
	@media (min-width: 1px){
		.container {
			width: 950px;
		}
	}

	[class*="col-"]{
		margin-bottom: -99999px;
		padding-bottom: 99999px;
	}
	#nomor_panggilan{
		font-weight: 900;
		font-size: 100px;
		background-color: #fff;
	}
	.text-orange {
		color: black;
		margin : 15px 0px;
		font-weight: 900;
		font-size: 20px;
		padding : 100 50 !important;
	}
	.text-red {
		background-color: #fff;
		color: #093829;
		font-weight: 900;
		font-size: 20px;
	}
	#poli_panggilan {
		background-color: #fff;
	}
	.antrian {
		color: #fff;
		font-size: 25px;
		font-weight: 900;
		padding : 10px;
	}
</style>

</head>

<body>
  <!-- Page Content -->
  <div class="container">
    <div class="row text-center">
		<div class="full-width">
			<div class="text-center">
				<div class="text-orange"> <strong>Pasien Dipanggil</strong> </div>
				<div id="dipanggil">
					<span id="nomor_panggilan" ></span>
					<div class="text-red"><strong id="poli_panggilan">-</strong></div>
				</div>
			</div>
		</div>
		{{-- <div class="column left no-float"> --}}
		{{-- </div> --}}
		{{-- <div class="column right full-height"> --}}
		{{-- 	<h1 id="jam"></h1> --}}
		{{-- 	<div> --}}
		{{-- 		<div class="list"><span id="nomor_poli_umum">-</span>/<span id="jumlah_poli_umum">-</span></div> --}}
		{{-- 		<div class="list"><span id="nomor_poli_gigi">-</span>/<span id="jumlah_poli_gigi">-</span></div> --}}
		{{-- 		<div class="list"><span id="nomor_poli_bidan">-</span>/<span id="jumlah_poli_bidan">-</span></div> --}}
		{{-- 		<div class="list"><span id="nomor_poli_estetik">-</span>/<span id="jumlah_poli_estetik">-</span></div> --}}
		{{-- 	</div> --}}
		{{-- </div> --}}
    </div>
	<div class="row2 text-center">
		<div class="column2 no-float">
			<div class="text-orange">Poli Umum</div>
			<div id="antrian_terakhir_poli_umum" class="big">-</div>
			<div class="antrian" id="antrian_poli_umum">
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
			</div>
		</div>
		<div class="column2 no-float">
			<div class="text-orange">Poli Gigi</div>
			<div id="antrian_terakhir_poli_gigi" class="big">-</div>
			<div class="antrian" id="antrian_poli_gigi">
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
			</div>
		</div>
		<div class="column2 no-float">
			<div class="text-orange">Poli Kebidanan</div>
			<div id="antrian_terakhir_poli_bidan" class="big">-</div>
			<div class="antrian" id="antrian_poli_bidan">
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
			</div>

		</div>
		<div class="column2 no-float">
			<div class="text-orange">Antrian Kasir</div>
			<div id="antrian_terakhir_kasir" class="big">-</div>
			<div class="antrian" id="antrian_kasir">
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
			</div>
		</div>
		<div class="column2 no-float">
			<div class="text-orange">Antrian Apotek</div>
			<div id="antrian_terakhir_apotek" class="big">-</div>
			<div class="antrian" id="antrian_apotek">
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
				<div> A1 </div>
			</div>
		</div>
	</div>
<p id="hitung">
	
</p>
</div>


<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
<script>
	//console.log tiap menit
	var hitung = 0
	setInterval(function(){
		var d = new Date(); // for now
		hitung += 1;
		jam = d.toLocaleTimeString();
		$('#jam').html(jam);
		$('#hitung').html(hitung);
	}, 1000);


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
