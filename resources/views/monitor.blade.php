<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
				<h1>KLINIK JATI ELOK</h1>
				<h2>Pasien Diperiksa</h2>
                <div id="nomor_antrian" class="title m-b-md">{{ $antrian }}</div>
				{{-- <h1>Untuk melaporkan kesalahan : </h1> --}}
				{{-- <h1> <a href="http://bit.ly/39WV083"> Klik Disini</a>  </h1> --}}
            </div>
        </div>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
