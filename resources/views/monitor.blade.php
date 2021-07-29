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
  <source src="{{ flex_url('sound/bel.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_nomorantrian">
  <source src="{{ flex_url('sound/nomorantrian.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_1">
  <source src="{{ flex_url('sound/1.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_2">
  <source src="{{ flex_url('sound/2.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_3">
  <source src="{{ flex_url('sound/3.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_4">
  <source src="{{ flex_url('sound/4.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_5">
  <source src="{{ flex_url('sound/5.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_6">
  <source src="{{ flex_url('sound/6.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_7">
  <source src="{{ flex_url('sound/7.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_8">
  <source src="{{ flex_url('sound/8.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_9">
  <source src="{{ flex_url('sound/9.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_10">
  <source src="{{ flex_url('sound/10.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_11">
  <source src="{{ flex_url('sound/11.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_belas">
  <source src="{{ flex_url('sound/belas.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_puluh">
  <source src="{{ flex_url('sound/puluh.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_100">
  <source src="{{ flex_url('sound/100.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_a">
  <source src="{{ flex_url('sound/a.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_b">
  <source src="{{ flex_url('sound/b.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_c">
  <source src="{{ flex_url('sound/c.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_d">
  <source src="{{ flex_url('sound/d.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_e">
  <source src="{{ flex_url('sound/e.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_f">
  <source src="{{ flex_url('sound/f.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_g">
  <source src="{{ flex_url('sound/g.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_h">
  <source src="{{ flex_url('sound/h.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_i">
  <source src="{{ flex_url('sound/i.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_j">
  <source src="{{ flex_url('sound/j.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_k">
  <source src="{{ flex_url('sound/k.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_farmasi">
  <source src="{{ flex_url('sound/farmasi.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_kasir">
  <source src="{{ flex_url('sound/kasir.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_pendaftaran">
  <source src="{{ flex_url('sound/pendaftaran.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_rapidtest">
  <source src="{{ flex_url('sound/rapidtest.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_ratus">
  <source src="{{ flex_url('sound/ratus.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_ruangperiksa">
  <source src="{{ flex_url('sound/ruangperiksa.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_ruangperiksasatu">
  <source src="{{ flex_url('sound/ruangperiksasatu.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="audio_silahkanmenuju">
  <source src="{{ flex_url('sound/silahkanmenuju.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<button type="button" class="btn btn-primary" onclick='pglPasien([]); return false'> Play Bel</button>
</div>


<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>

<script>
	{{-- var base = "{{ url('/') }}"; --}}
	var base = "{{ secure_url('/') }}";
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
		if( data.text ){
			var panggil_pasien = 1;
		} else {
			var panggil_pasien = 0;
		}
		$.get(base + '/antrianperiksa/monitor/getData/' + panggil_pasien,
			{
			},
			function (data, textStatus, jqXHR) {
				var panggilan                 = data.panggilan;
				var dt                        = data.data;
				var antrian_terakhir_per_poli = data.antrian_terakhir_per_poli;
				var antrian_by_type           = data.antrian_by_type;
				clear(panggilan);
				console.log('data');
				console.log(data);
				console.log('panggilan');
				console.log(panggilan);
				console.log("typeof panggilan !== 'undefined'");
				console.log(typeof panggilan !== 'undefined');



				$("#antrian_terakhir_poli_umum").html(antrian_terakhir_per_poli[1]);
				$("#antrian_terakhir_poli_gigi").html(antrian_terakhir_per_poli[2]);
				$("#antrian_terakhir_poli_bidan").html(antrian_terakhir_per_poli[3]);
				$("#antrian_terakhir_poli_estetik").html(antrian_terakhir_per_poli[4]);

				$("#antrian_terakhir_poli_prolanis").html(antrian_terakhir_per_poli[6]);
				$("#antrian_terakhir_poli_rapid_test").html(antrian_terakhir_per_poli[7]);
				$("#antrian_terakhir_poli_mcu").html(antrian_terakhir_per_poli[8]);

				$("#antrian_terakhir_kasir").html(antrian_terakhir_per_poli['antrian_kasir']);
				$("#antrian_terakhir_farmasi").html(antrian_terakhir_per_poli['antrian_farmasi']);

				var jenis_antrian_ids = data.jenis_antrian_ids;

				for (let a = 0; a < jenis_antrian_ids.length; a++) {
					var temp            = '';
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

				var antrian_farmasi = antrian_by_type['antrian_farmasi'];
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
			}
		);
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
		console.log('sound');
		console.log(sound);
		var x     = document.getElementById("myAudio");
		var m     = [];
		for (var i = 0, len = sound.length; i < len; i++) {
			m[i] = document.getElementById("audio_" + sound[i]);
		}

		if (typeof m[0] !== 'undefined') {
			x.onended=function(){
			  m[0].play();
			}
		};

		if (typeof m[1] !== 'undefined') {
			m[0].onended=function(){
			  m[1].play();
			};
		}
		if (typeof m[2] !== 'undefined') {
			m[1].onended=function(){
			  m[2].play();
			};
		}
		if (typeof m[3] !== 'undefined') {
			m[2].onended=function(){
			  m[3].play();
			};
		}
		console.log('m[3]');
		console.log(m[3]);
		if (typeof m[4] !== 'undefined') {
			m[3].onended=function(){
			  m[4].play();
			};
		}
		if (typeof m[5] !== 'undefined') {
			m[4].onended=function(){
			  m[5].play();
			};
		}
		if (typeof m[6] !== 'undefined') {
			m[5].onended=function(){
			  m[6].play();
			};
		}
		if (typeof m[7] !== 'undefined') {
			m[6].onended=function(){
			  m[7].play();
			};
		}
		if (typeof m[8] !== 'undefined') {
			m[7].onended=function(){
			  m[8].play();
			};
		}
		if (typeof m[9] !== 'undefined') {
			m[8].onended=function(){
			  m[9].play();
			};
		}
		if ( typeof m[10] !== 'undefined') {
			m[9].onended=function(){
			  m[10].play();
			};
		}
		if ( typeof m[11] !== 'undefined') {
			m[10].onended=function(){
			  m[11].play();
			};
		}
		if ( typeof m[12] !== 'undefined') {
			m[11].onended=function(){
			  m[12].play();
			};
		}
		x.play();
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
