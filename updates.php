<html>
	<head>
		<script type="text/JavaScript">
			var count = 2;
			var counter = setInterval(refreshTimer, 1000 * count);
			function refreshTimer(){
				document.getElementById('framedisplay').contentWindow.location.reload();
			}
		</script>
		<?php exec("nohup eselect news list >/tmp/linux-webui_updates.log 2>&1 &"); ?>
		<?php exec("nohup emerge -pv --update --deep --with-bdeps=y --newuse @world >>/tmp/linux-webui_updates.log 2>&1 &"); ?>
	</head>
	<body>
		<iframe seamless id="framedisplay" style="width: 95%; height: 95%" src="shellscripts/catfile.php?file=/tmp/linux-webui_updates.log"></iframe>
	</body>
</html>