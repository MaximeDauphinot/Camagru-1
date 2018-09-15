<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/profile.css"/>
		<title>Camagru</title>
	</head>
<body>
	<div class="header">
		<div class="position_navbar">
			<div class="header_content_left">
				<a href="take_picture.php">
					<div class="logo_appareil"><img src="../ressources/logo_appareil.png"width="30px"height="30px"></div>
                </a>
                <a href="index_delog.php"> <!-- a changer en index.php quand bdd faite -->
                    <div class="logo_camagru"><img src="../ressources/logo_name.png"width="105px"height="35px"style="margin-left:7px"></div>
                </a>
			</div>
			<div class="header_content_right">
				<a href="setting.php">
					<div class="logo_setting"><img src="../ressources/logo_setting.png"width="30px"height="30px"></div>
				</a>
				<a href="">
                    <div class="logo_logout"><img src="../ressources/logo_logout.png" width="30px"height="30px"></div>
                </a>
			</div>
		</div>
	</div>
	<div id="container">
		<div class="layout_profile">
			<div id="header_profile">
				<div class="header_profile_picture">
					<div class="header_profile_picture_sd">
						<img class="roundimage" src="../ressources/pp.jpg"/>
					</div>
				</div>
				<div class="layout_profile_info">
					<div class="header_profile_name">
						<h1>Virgil Abloh</h1>
					</div>
					<ul class="header_profile_info">
						<li class="info_post">
							<span>30</span>posts
						</li>			
					</ul>
				</div>
			</div>
			<div id="container_profile_picture">
				<div class="profile_picture_base">
					<div class="profile_row_picture">
						<div class="profile_picture">
							<!-- recup les images dans la bdd par ordre chronologique -->
						</div>
						<div class="profile_picture">
							<!-- recup les images dans la bdd par ordre chronologique -->
						</div>
						<div class="profile_picture">
							<!-- recup les images dans la bdd par ordre chronologique -->
						</div>
					</div>
				</div>
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