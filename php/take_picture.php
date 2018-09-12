<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/take_picture.css"/>
	<title>Camagru</title>
</head>
<body>
	<div class="header">
		<div class="position_navbar">
			<div class="header_content_left">
				<a href="take_picture.php">
					<div class="logo_appareil"><img src="../ressources/logo_appareil.png"width="30px"height="30px"></div>
				</a>
				<div class="logo_camagru"><img src="../ressources/logo_name.png"width="105px"height="35px"style="margin-left:7px"></div>
			</div>
			<div class="header_content_right">
				<a href="sign_up.php">
					<div class="logo_sign_up"><img src="../ressources/logo_signup.png"width="30px"height="30px"></div>
				</a>
				<a href="sign_in.php">
					<div class="logo_sign_in"><img src="../ressources/logo_signin.png"width="30px"height="30px"></div>
				</a>
			</div>
		</div>
	</div>
	<div id="container">
		<div id="layout_picture">
			<div class="container_content_left">
				<div class="insta_post">  
					<div class="post_content">
						<video id="video"></video>
						<canvas id="canvas"></canvas>
						<button id="startbutton" disabled="true" type="button">Prendre une photo</button>
						<script src="../js/take_photo.js"></script>
						<img id="test" src="" style="z-index: 9999;float:left;position:relative;margin-top:-120px;margin-left:40;max-width:100px;">
					</div>
				</div>				
			</div>
			<div class="container_content_right">
				<div class="header_other_user">
					<div class="header_alignment">
						<div class="header_pp_other_user">
							<a class="roundedimage_sd">
								<img src="http://placekitten.com/g/30/30" alt="1" class="pp_sd"/>
							</a>
						</div>
						<div class="alignment_name_other_user">
							<div class="name_other_user">
								<a class="account_name_header" title="#">Filtre</a>
							</div>
						</div>
					</div>
				</div>
				<div class="user">
					<span class="user_name">Choose</span>

				</div>
				<div class="position_user">
					<div class="position_user_sd">
						<div class="alignment_user">
							<div class="here_it_is">
								<div class="header_alignment"></div>
							</div>
						</div>
					</div>
				</div>
				<hr class="for_beauty">
			</div>
		</div>
	</div>
	<div id="footer">
		<div id="footer_bar">
			<strong> © Mdauphin Lhermann </strong>
		</div>
	</div>
</body>
</html>