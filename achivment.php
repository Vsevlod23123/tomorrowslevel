<?php
header("Content-type: text/html; charset=utf-8");
?>
<html>

<head>
	<?php if (!isset($_utl0)) {
		include('_head.php');
		include("_func.php");
	} ?>

	<style>
		.main_education {
			background: #FFFFFF;
			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.05);
			border-radius: 3px;
			width: 40%;
			height: 250px;
			margin-left: 5%;
			margin-top: 5%;
			overflow: hidden;
			position: relative;
			float: left;
		}

		#menu_user li {
			margin: 10 0 10 0;
			width: 100%;
			height: 27px;
			left: 1180px;
			top: 99px;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 170%;
			letter-spacing: 0.04em;
			color: #2C95FF;
		}

		#menu_user li:hover {
			text-decoration: underline;
		}

		#header_buttons {
			width: 360px;
			height: 40px;
			position: relative;
			top: 200px;
			margin: auto;
		}

		#header_buttons button:hover {
			text-decoration: underline;
		}

		#header_buttons div:nth-child(1) {
			float: left;
			background: #2C95FF;
			border-radius: 3px;
			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			font-size: 16px;
			line-height: 170%;
			text-align: center;
			letter-spacing: 0.04em;
			color: #FFFFFF;
			padding: 5px;
			cursor: pointer;
		}

		#header_buttons div:nth-child(2) {
			float: right;
			background: #2C95FF;
			border-radius: 3px;
			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			font-size: 16px;
			text-align: center;
			letter-spacing: 0.04em;
			color: #FFFFFF;
			padding: 10px;
			cursor: pointer;
		}

		#success_bar {}
	</style>
</head>

<body>
	<div style="
		position: absolute;
		width: 100%;
		height: 200%;
		top: 0px;
		left: 0px;
		">
		<div style="position: absolute;
				width: 100%;
				height: 60px;
				left: 0px;
				top: 0px;
				background: #FFFFFF;
				box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.05);">

			<img src="img/logo.png" style="
				position: absolute;
				top: 12px;
				left: 120px;
			">
			<div onclick="window.open('main.php', '_self');" onmousemove="$(this).css('text-decoration-line','underline');" onmouseout="$(this).css('text-decoration-line','none');" style="
				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				font-size: 16px;
				line-height: 170%;
				letter-spacing: 0.04em;
				color: #292929;
				position: absolute;
				top: 14px;
				left: 400px;
				cursor: pointer;
			">
				Каталог материалов
			</div>
			<div onclick="window.open('main.php?mymain', '_self');" onmousemove="$(this).css('text-decoration-line','underline');" onmouseout="$(this).css('text-decoration-line','none');" style="
				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				font-size: 16px;
				line-height: 170%;
				letter-spacing: 0.04em;
				color: #292929;
				position: absolute;
				top: 14px;
				left: 600px;
				cursor: pointer;
			">
				Мои курсы
			</div>
			<div style="
				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				font-size: 16px;
				line-height: 170%;  /* or 27px */
				letter-spacing: 0.04em;    /* Black */
				color: #292929;
				position: absolute;
				top: 14px;
				right: 170px;
			">
				<?php
				if (isset($_SESSION["id"])) {
					echo query("SELECT title FROM hakaton_user WHERE id=" . $_SESSION["id"] . ";")[0]["title"];
				} else {
					echo "Войти";
				}
				?>
			</div>
			<div style="cursor: pointer;" onclick="
									 if ($('#menu_user').css('display') == 'none') 
									{
										$('#menu_user').css('display', 'block');
									} else {
										$('#menu_user').css('display', 'none');
									}
								  ">
				<img src="img/user.svg" style="
				position: absolute;
				top: 10px;
				right: 120px;
			">
				<img src="img/vector.svg" style="
				position: absolute;
				width: 10px;
				height: 4.57px;
				left: 1230px;
				top: 26px;
				border: 2px solid #2C95FF;
			">
			</div>
		</div>
		<ul id="menu_user" style="
				cursor: pointer;
				z-index:999;
				display: none; 
				left: 1015px;
				top: 25px;
				background: rgb(255, 255, 255);
				border: 1px solid rgb(231, 231, 231);
				box-sizing: border-box;
				box-shadow: rgba(0, 0, 0, 0.05) 0px 5px 10px;
				border-radius: 3px;
				width: 234px;
				height: 122px;
				position: absolute;" onmousemove="$(this).css('display','true');">
			<?php
			if ($_SESSION["firm"] == "") {
				echo "<li onclick=\"window.open('company.php', '_self');\">Компания</li>";
			}
			?>
			<li onclick="window.open('achivment.php', '_self');">Настройки аккаунта</li>
			<li onclick="window.open('index.php', '_self');">Выход</li>
		</ul>
		<div style="
			font-family: Roboto;
			font-style: normal;
			font-weight: 500;
			font-size: 36px;
			line-height: 42px;
			letter-spacing: 0.04em;
			top: 100px;
			color: #292929;
			position: absolute;
			text-align: center;
			width: 100%;
		">

			<?php
			if (isset($_SESSION["id"])) {
				echo "<p style =\"    top: 30px;
						position: relative;\">" . query("SELECT title FROM hakaton_user WHERE id=" . $_SESSION["id"] . ";")[0]["title"] . "</p>";
			} else {
				echo "...";
			}
			?> <img src="img/user.svg" style="
				    width: 100px;
    position: relative;
    top: -150px;
    right: 0px;
			">
			<?php
			if (isset($_SESSION["id"])) {

				$part = query("SELECT hakaton_group.title FROM hakaton_user_group,hakaton_group WHERE hakaton_group.id =  hakaton_user_group.id_group AND hakaton_user_group.id_user=" . $_SESSION["id"]);
				echo "<p style = \"top: -100px;
				position: relative;\">";
				foreach ($part as $thispart) {
					echo $thispart["title"] . "<br>";
				}
				echo "</p>";
			} else {
				echo "...";
			}
			?>

		</div>
		<div style="
		  width: 200%;
		  border-radius: 50%;
		  overflow: hidden;
		  text-align: center;
		  z-index: -1;
		  top: -100px;
		  position: absolute;
		  left: -50%;
		">
			<img style="
				border-radius: 50%;
			" src="img/bkg.png"></img>

		</div>
		<img style="
    position: relative;
    top: 400px;
    width: 100%;
" src="img/test1.png"></img>

	</div>

	<div style="
			position: absolute;
			top: 200%;
			width: 100%;
			left: 0px;
			height: 50px;
			background: #F2F2F2;
		">
		<div style="
				font-family: Roboto;
				font-style: normal;
				font-weight: 500;
				font-size: 12px;
				line-height: 120%;
				letter-spacing: 0.04em;
				color: #9F9F9F;
				position: absolute;
				top: 15px;
				left: 120px;
			">
			Tomorrow's level 2019
		</div>

		<div style="
				font-family: Roboto;
				font-style: normal;
				font-weight: 500;
				font-size: 12px;
				line-height: 120%;
				letter-spacing: 0.04em;
				color: #9F9F9F;
				position: absolute;
				top: 15px;
				right: 240px;
			">
			Авторам
		</div>

		<div style="
				font-family: Roboto;
				font-style: normal;
				font-weight: 500;
				font-size: 12px;
				line-height: 120%;
				letter-spacing: 0.04em;
				color: #9F9F9F;
				position: absolute;
				top: 15px;
				right: 120px;
			">
			Нужна помощь?
		</div>
	</div>
</body>
<script>
</script>

</html>