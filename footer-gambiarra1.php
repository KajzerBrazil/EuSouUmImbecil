<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-5 col-md-7">
				<figure>
					<img src="img/logo.png">
				</figure>
				<div class="text">
					<h3>OBRIGADO POR ESTAR DENTRO DESSE SITE, SENPAI</h3>
					<a href="page-premio.php">Clique em mim para receber um prêmio >///<</a>
				</div>
			</div>

			<div class="col-xs-12 col-sm-7 col-md-5">
				<figure class="gif">
					<img src="img/shiro.gif">
				</figure>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-xs-12 col-sm-5 col-md-7">
			<div class="porao">
			<h1> PORÃO </h1>
			</div>
		</div>
	</div>
	<!-- Coisas que recebem Position: Fixed; e puxam coisas do JQuery GRR -->
	<div class="return-to-top">
        <i class="fa fa-hand-o-up"></i>
    </div>
    <div class="bot-senpai">
	    <script type="text/javascript">
			var headID = document.getElementsByTagName("head")[0];
			var newCss = document.createElement('link');
			newCss.rel = 'stylesheet';
			newCss.type = 'text/css';
			window._botUsername = '669986';
			window._botName = 'Senpai';
			newCss.href = "http://rebot.me/assets/css/bot.css";
			var newScript = document.createElement('script');
			newScript.src = "http://rebot.me/assets/js/bot.js";
			newScript.type = 'text/javascript';
			headID.appendChild(newScript);
			headID.appendChild(newCss);
		</script>
	</div>
</footer>
	
	<script src="js/main.js"></script>
	<script src="https://www.gstatic.com/charts/loader.js"></script>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
		<script type="text/javascript">
			 google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'loli por metro quadrado'],
          // América do Norte
          ['United States', 12837],
          ['Canada', 9042],
          ['Mexico', 8973],
          // América Central
          ['Belize', 2211],
          ['Guatemala', 4192],
          ['Nicaragua', 4127],
          // America Central Insular
          ['Cuba', 10032],
          ['Bahamas', 20013],

          // América do Sul
          ['Peru', 17039],
          ['Paraguay', 30204],
          ['Uruguay', 1990],
          ['Brazil', 102548],
          ['Argentina', 10035],
          ['Colombia', 9302],
          ['Ecuador', 20193],
          ['Venezuela', 39261],
          ['Chile', 50294],
          ['Bolivia', 29425],
          // Pura e genuina inutilidade
          ['Suriname', 1],
          ['Guyana', 0],
          ['French Guiana', 0],
          // Europa
          ['France', 12669],
          ['Russia', 40267],
          ['Italy', 10793],
          ['Portugal', 33425],
          ['Spain', 9120],
          ['Germany', 60023],
          // Ásia
          ['Japan', 108937],
          // África
          ['Morocco', 107302],
          // Oceania
          ['New zealand', 4],
          ['Australia', 20934],

        ]);

        var options = { 
         colorAxis: {colors: ['#FCC8C2', '#FF87AB', '#A85751']},
          backgroundColor: '#8D86C9',
          datalessRegionColor: '#BBBBBB',
          
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
		</script>
	</body>
</html>