<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/setting.css"/>
		<title>Camagru</title>
	</head>
<body>
	<div class="header">
		<div class="position_navbar">
			<div class="header_content_left">
				<a href="take_picture.php">
					<div class="logo_appareil">
						<img src="../ressources/logo_appareil.png"width="30px"height="30px">
					</div>
                </a>
                <a href="index_delog.php"> <!-- a changer en index.php quand bdd faite -->
                    <div class="logo_camagru">
						<img src="../ressources/logo_name.png"width="105px"height="35px"style="margin-left:7px">
					</div>
                </a>
			</div>
			<div class="header_content_right">
				<a href="profile.php">
					<div class="logo_account">
						<img src="../ressources/logo_account.png"width="30px"height="30px">
					</div>
				</a>
				<a href="">
                    <div class="logo_logout">
						<img src="../ressources/logo_logout.png" width="30px"height="30px">
					</div>
                </a>
			</div>
		</div>
	</div>
	<div id="container">
		<div class="main_setting">
			<ul class="container_left_setting">
				<li>
					<a class="li_setting" href="setting.php">Edit Profile</a> <!--page base -->
				</li>
				<li>
					<a class="li_setting" href="setting_password.php">Change Password</a> <!-- meme page que setting mais dans container_right on pourra modif le password -->
				</li>
				<li>
					<a class="li_setting">Change E-mail</a> <!-- meme page que setting mais dans container_right on pourra modif le mail -->
				</li>
			</ul>
		<div id="container_right_setting">
			<!-- tt ce quil faut pour administer le bail -->
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