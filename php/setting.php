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
					<div class="logo_appareil"><img src="../ressources/logo_appareil.png"width="30px"height="30px"></div>
                </a>
                <a href="index_delog.php"> <!-- a changer en index.php quand bdd faite -->
                    <div class="logo_camagru"><img src="../ressources/logo_name.png"width="105px"height="35px"style="margin-left:7px"></div>
                </a>
			</div>
			<div class="header_content_right">
				<a href="profile.php">
					<div class="logo_account"><img src="../ressources/logo_account.png"width="30px"height="30px"></div>
				</a>
			</div>
		</div>
	</div>
	<div id="container">
		<ul class="container_left_setting">
			<div class="listing_setting">
				<a href="setting_profile.php">edit profile</a> <!--page base -->
				<a href="setting_password.php">edit password</a> <!-- meme page que setting mais dans container_right on pourra modif le password -->
				<a href="setting_mail.php">edit mail</a> <!-- meme page que setting mais dans container_right on pourra modif le mail -->
				<a href="setting_notif">edit notif</a> <!-- meme page que setting mais dans container_right on pourra modif les notifs -->
			</div>
		</ul>
		<div id="container_right_setting">
			<!-- tt ce quil faut pour administer le bail -->
		</div>	
	</div>
	<div id="footer">
		<div id="footer_bar">
			<strong> © Mdauphin Lhermann </strong>
		</div>
	</div>
</body>
</html>