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
		var antrian_by_type = data.text.antrian_by_type;

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

		$("#antrian_terakhir_poli_prolanis").html(antrian_terakhir_per_poli[6]);
		$("#antrian_terakhir_poli_rapid_test").html(antrian_terakhir_per_poli[7]);
		$("#antrian_terakhir_poli_mcu").html(antrian_terakhir_per_poli[8]);






		refreshElement('#dipanggil');
		$('#dipanggil').addClass('animate__animated animate__tada animate__repeat-3');
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

