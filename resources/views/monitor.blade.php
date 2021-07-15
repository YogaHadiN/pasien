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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<style type="text/css" media="all">
	.animate__animated.animate__bounce {
	  --animate-duration: 1s;
	}
	* {
		box-sizing: border-box;
		text-align: center;
		{{-- background-image: url("green-mint.jpeg"); --}}
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
		margin :  0px auto 20px auto;
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
			width: 970px;
			height: 100vh;
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
		color: #3B6345;
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
			<div class="antrian" id="antrian_poli_1"></div>
		</div>
		<div class="column2 no-float">
			<div class="text-orange">Rapid Test</div>
			<div id="antrian_terakhir_poli_rapid_test" class="big">-</div>
			<div class="antrian" id="antrian_poli_7"></div>
		</div>
		<div class="column2 no-float">
			<div class="text-orange">Poli Kebidanan</div>
			<div id="antrian_terakhir_poli_bidan" class="big">-</div>
			<div class="antrian" id="antrian_poli_3"></div>
		</div>
		<div class="column2 no-float">
			<div class="text-orange">Antrian Kasir</div>
			<div id="antrian_terakhir_kasir" class="big">-</div>
			<div class="antrian" id="antrian_kasir"></div>
		</div>
		<div class="column2 no-float">
			<div class="text-orange">Antrian Farmasi</div>
			<div id="antrian_terakhir_farmasi" class="big">-</div>
			<div class="antrian" id="antrian_farmasi"></div>
		</div>
	</div>
<p id="hitung">
	
</p>
<audio id="myAudio">
  <source src="{{ url('sound/bel.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<button type="button" class="btn btn-primary" onclick='pglPasien([]); return false'> Play Bel</button>
</div>


<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>

<script>
	var base = "{{ url('/') }}";
	console.log('base');
	console.log(base);
	var hitung = 0
	setInterval(function(){
		var d = new Date(); // for now
		hitung += 1;
		jam = d.toLocaleTimeString();
		$('#jam').html(jam);
		$('#hitung').html(hitung);
	}, 1000);

	var channel_name = 'my-channel';
	var event_name   = 'form-submitted';

	Pusher.logToConsole = true;

	var pusher = new Pusher('7d5ef12846803696f64d', {
	  cluster: 'ap1',
	  forceTLS: true
	});

	var channel = pusher.subscribe(channel_name);
	var nomor_antrian = '';
	channel.bind(event_name, function(data) {
		var panggilan                 = data.text.panggilan;
		var dt                        = data.text.data;
		var antrian_terakhir_per_poli = data.text.antrian_terakhir_per_poli;
		var antrian_by_type           = data.text.antrian_by_type;
		clear(panggilan);
		console.log('data');
		console.log(data);
		console.log('panggilan');
		console.log(panggilan);
		console.log("typeof panggilan !== 'undefined'");
		console.log(typeof panggilan !== 'undefined');


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

		$("#antrian_terakhir_poli_prolanis").html(antrian_terakhir_per_poli[6]);
		$("#antrian_terakhir_poli_rapid_test").html(antrian_terakhir_per_poli[7]);
		$("#antrian_terakhir_poli_mcu").html(antrian_terakhir_per_poli[8]);

		$("#antrian_terakhir_kasir").html(antrian_terakhir_per_poli['antrian_kasir']);
		$("#antrian_terakhir_farmasi").html(antrian_terakhir_per_poli['antrian_farmasi']);

		var jenis_antrian_ids = data.text.jenis_antrian_ids;

		for (let a = 0; a < jenis_antrian_ids.length; a++) {
			var temp = '';
			var antrian_periksa = antrian_by_type.antrian_periksa[jenis_antrian_ids[a].id]
			if (typeof antrian_periksa !== 'undefined') {
				for (let i = 0; i < antrian_periksa.length; i++) {
					if(
							antrian_periksa[i].antriable_type !== 'App\\AntrianApotek' &&
							antrian_periksa[i].antriable_type !== 'App\\AntrianKasir' &&
							antrian_periksa[i].antriable_type !== 'App\\AntrianFarmasi' &&
							antrian_periksa[i] !== jenis_antrian_ids[a].nomor_antrian_terakhir 
						)
					{
						if( antrian_periksa[i] !== jenis_antrian_ids[a].nomor_antrian_terakhir ){
							temp += '<div>'
							temp += ' ' + antrian_periksa[i].nomor_antrian + ' '
							temp += '</div>'
						}

					}
				}
				$("#antrian_poli" + "_" + jenis_antrian_ids[a].id).html(temp);
			}
		}

		var antrian_kasir = antrian_by_type.antrian_kasir
		if (typeof antrian_kasir !== 'undefined') {
			var temp = '';
			for (let a = 0; a < antrian_kasir.length; a++) {
				temp += '<div>';
				temp += ' ' + antrian_kasir[a].nomor_antrian + '';
				temp += '</div>';
			}
			$("#antrian_kasir").html(temp);
		}

		var antrian_farmasi = antrian_by_type['App\\AntrianFarmasi'];
		if (typeof antrian_farmasi !== 'undefined') {
			var temp = '';
			for (let a = 0; a < antrian_farmasi.length; a++) {
				temp += '<div>';
				temp += ' ' + antrian_farmasi[a].nomor_antrian + '';
				temp += '</div>';
			}
			$("#antrian_farmasi").html(temp);
		}
		if(typeof panggilan !== 'undefined'){
			refreshElement('#dipanggil');
			$('#nomor_panggilan').html(panggilan.nomor_antrian);
			$('#poli_panggilan').html(panggilan.poli);
			$('#dipanggil').addClass('animate__animated animate__tada animate__repeat-3');
			var ruangan = '';
			if( panggilan.poli == 'Poli Umum' ){
				ruangan = 'ruangperiksasatu';
			} else if ( panggilan.poli == 'Pendaftaran' ){
				ruangan = 'pendaftaran';
			} else if (panggilan.poli == 'Antrian Kasir'){
				ruangan = 'kasir';
			} else if (panggilan.poli == 'Rapid Test'){
				ruangan = 'rapidtest';
			} else if (panggilan.poli == 'Antrian Farmasi'){
				ruangan = 'farmasi';
			}
			panggilPasien(ruangan);
		}

	});

	function getChannelName(){
		@if( gethostname() == 'Yogas-Mac.local' )
			var channel_name = 'my-channel2';
		@else
			var channel_name = 'my-channel';
		@endif
		return channel_name;
	}

	function refreshElement(id){
	   var el = $(id);
	   el.before( el.clone(true) ).remove();
	}
	function clear(panggilan){
		if(typeof panggilan !== 'undefined'){
			$('#nomor_panggilan').html('-');
			$('#poli_panggilan').html('-');
		}
		$('#nomor_poli_umum').html('-');
		$('#jumlah_poli_umum').html('-');
		$('#nomor_poli_gigi').html('-');
		$('#jumlah_poli_gigi').html('-');
		$('#nomor_poli_bidan').html('-');
		$('#jumlah_poli_bidan').html('-');
		$('#nomor_poli_estetik').html('-');
		$('#jumlah_poli_estetik').html('-');
		$("#antrian_terakhir_poli_umum").html('-');
		$("#antrian_terakhir_poli_gigi").html('-');
		$("#antrian_terakhir_poli_bidan").html('-');
		$("#antrian_terakhir_poli_estetik").html('-');
		$("#antrian_terakhir_poli_prolanis").html('-');
		$("#antrian_terakhir_poli_rapid_test").html('-');
		$("#antrian_terakhir_poli_mcu").html('-');
		$("#antrian_terakhir_kasir").html('-');
		$("#antrian_terakhir_farmasi").html('-');
		$("#antrian_poli_1").html('');
		$("#antrian_poli_7").html('');
		$("#antrian_poli_3").html('');
		$("#antrian_kasir").html('');
		$("#antrian_farmasi").html('');
	}
	function pglPasien(sound){
		var x     = document.getElementById("myAudio");
		x.play();
		var index = 0;
		x.onended = function() {
			if(index < sound.length){
				x.src=base + '/sound/' + sound[index];
				x.play();
				index++;
			} else {
				x.src=base + '/sound/bel.mp3';
			}
		};
	}
	function panggilPasien(ruangan){
		$.get(base + '/antrianperiksa/monitor/convert_sound_to_array',
			{
				nomor_antrian: $("#nomor_panggilan").html(),
				ruangan:       ruangan
			},
			function (data, textStatus, jqXHR) {
				pglPasien(data);
			}
		);
	}
</script>

</body>

</html>
