<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="http://www.extra-life.org/resources/css/widgets/300x250thermo/widget_300x250thermo.css?v=42150.6842014" type="text/css" />
		<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="jquery.storage.js"></script>
		<!--[if IE 6]>
		<link rel="stylesheet" href="http://www.extra-life.org/resources/css/widgets/300x250thermo/widget_300x250thermo_ie6.css?v=42150.6842014" type="text/css" />
		<![endif]-->

		<!--[if IE 7]>
		<link rel="stylesheet" href="http://www.extra-life.org/resources/css/widgets/300x250thermo/widget_300x250thermo_ie7.css?v=42150.6842014" type="text/css" />
		<![endif]-->

		<!--[if IE 8]>
		<link rel="stylesheet" href="http://www.extra-life.org/resources/css/widgets/300x250thermo/widget_300x250thermo_ie8.css?v=42150.6842014" type="text/css" />
		<![endif]-->

		
		<link rel="stylesheet" href="http://www.extra-life.org/themes/extralife2014/css/widgets.min.css?v=42150.6842014" type="text/css" />
		<style>
			h1, h2 {
				font-weight: normal;			
			}
			body {
				font-family: sans-serif;
				font-size: 22px;
				background:#000;
				color:#fff;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			strong {
				font-weight: normal;
			}
		</style>
		<meta http-equiv="refresh" content="120">
		<title>Messages | 1Fyme's Extra Life Donation Tracker</title>
	</head>
	<body>
		<div class="controlpanel">
			<p><a href="index.php">Return to Tracker</a> <a href="template.php">Template</a>
			</p>
		</div>
		<?php
			require '../../assets/simple_html_dom.php';
			$html = file_get_html('http://www.extra-life.org/index.cfm?fuseaction=donorDrive.participantDonations&participantID=######');
			$messages= $html->find('table', 0);
			echo $messages;

		?>
		<small>
			<p>This updates every 2 minutes to grab data from Extra Life's website.</p>
		</small>
		<p>1Fyme's Extra Life Donation Tracker</p>
	</body>
</html>
