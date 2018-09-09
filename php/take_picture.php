<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/take_picture.css"/>
	<link rel="stylesheet" type="text/css" href="../css/photo_camera.css"/>
	<title>Camagru</title>
</head>
<body>
	<div class="header">
		<div class="position_navbar">
			<div class="header_content_left">
				<div class="logo_appareil"><img src="../ressources/logo_appareil.png" width="30px" height="30px"></div>
				<a href="index_delog.php"> <!-- a changer en index.php quand la bdd sera faites -->
					<div class="logo_camagru"><img src="../ressources/logo_name.png" width="225px" height="50px"></div>
				</a>
			</div>
			<div class="header_content_right">
				<div class="logo_account"><a href="profile.php"><img src="../ressources/logo_account.png" width="30px" height="30px"></a></div>
			</div>
		</div>
	</div>
	<div id="container">
		<div id="layout_camera">
			<video id="video"></video>
			<canvas id="canvas"></canvas>
			<!-- <button id="startbutton" disabled="true" type="button">Prendre une photo</button> -->
			<script src="../js/take_photo.js"></script>
			<img id="test" src="" style="z-index: 9999;float:left;position:relative;margin-top:-120px;margin-left:40;max-width:100px;">
		</div>
	</div>
	<div id="footer">
		<div id="footer_bar">
			<strong> © Mdauphin Lhermann </strong>
		</div>
	</div>
</body>
</html>