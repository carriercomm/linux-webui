<html>
	<head>
		<link rel="stylesheet" type="text/css" href="design.css">
		<link rel="stylesheet" type="text/css" href="about.css">
		<title>linux-webui - Linux Server Control Panel</title>
	</head>
    <body>
        <div class="wrapper">
        	<?php include("header.php"); ?>
        	<div class="body">
        		<div>&nbsp;</div>
        		<div class="body_content">
        			<h3>linux-webui</h3>
        			<p>A simple web control panel for linux servers.</p>
        			<p>&nbsp;</p>
        			<p><?php echo exec("git describe"); ?></p>
        			<p><a href="gitupdate.php"><button>Update</button></a></p>
        			<p>&nbsp;</p>
        			<p>Written and designed by Viraj Chitnis</p>
        		</div>
        	</div>
            <div class="push"></div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>