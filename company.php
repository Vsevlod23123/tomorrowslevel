<?php 
	header("Content-type: text/html; charset=utf-8"); 
?>
<html>
	<head>
		<?php if(!isset($_utl0)){include('_head.php');include("_func.php");}?>
		
		<style>
			.main_education
			{
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

			#header_buttons button:hover {text-decoration: underline;}
			#header_buttons div:nth-child(1){
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
		</style>
	</head>
	<body>
		<div style="
		position: absolute;
		width: 100%;
		height: 350%;
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
					if(isset($_SESSION["id"]))
					{
						echo query("SELECT title FROM hakaton_user WHERE id=".$_SESSION["id"].";")[0]["title"];
					}
					else
					{
						echo "Войти";
					}
				?>
			</div>
			<div style = "cursor: pointer;" onclick="
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
				
			">
			</div>
		</div>
		<ul id="menu_user" style = "
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
					if($_SESSION["firm"]=="")
					{
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
			top: 80px;
			color: #292929;
			position: absolute;
			text-align: center;
			width: 100%;
		">
		Компания
		<br>
			<div style="

				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				line-height: 170%;
				text-align: center;
				letter-spacing: 0.04em;
				color: #292929;
				position: absolute;
				width: 100%;
				top: 50px;
			
			">
				Здесь представлены различные модули, групперующие темы<br>
				c обучающей информацией
			</div>
		</div>
		<div id="header_buttons">
			<div>Создать отдел</div>
			<div>Пригласить</div>
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
		  opacity: 0.2;
		">
			<img style="
				border-radius: 50%;
			"
			src="img/bkg.png"></img>
		</div>
		<?php 
			if(isset($_SESSION["id"]))
			{
				echo "<div id=main_div style = \" 
					position: absolute;
					width: 100%;
					height: calc(100% - 400px);
					top: 400px;
					background: #FFFFFF;
					box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.05);
					border-radius: 3px;
				\">";
					echo "<div style=\"
						background: #FFFFFF;
						border-radius: 3px;
						width: 80%;
						position: relative;
						left: 10%;
						margin-top: 5%;
						padding-top: 10px;
						padding-left: 10px;
						padding-bottom: 10px;
						font-family: Roboto;
						font-style: normal;
						font-weight: 500;
						font-size: 24px;
						line-height: 28px;
						letter-spacing: 0.04em;
						color: #292929;
						text-align: center;
					\">
						Список отделов и сотрудников
					</div>";
				$arr = query("SELECT id, title FROM hakaton_group WHERE id_user=".$_SESSION["id"].";");
				foreach ($arr as $farr)
				{
					echo "<div style=\"
						background: #FFFFFF;
						box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.05);
						border-radius: 3px;
						width: 80%;
						position: relative;
						left: 10%;
						margin-top: 5%;
						margin-bottom: 1%;
						padding-top: 10px;
						padding-left: 10px;
						padding-bottom: 10px;
						font-family: Roboto;
						font-style: normal;
						font-weight: 500;
						font-size: 18px;
						line-height: 21px;
						letter-spacing: 0.04em;
						color: #292929;
					\">".$farr["title"]."
					<div onmousemove=\"$(this).css('text-decoration-line','underline');\" onmouseout=\"$(this).css('text-decoration-line','none');\" style=\"
						font-family: Roboto;
						font-style: normal;
						font-weight: normal;
						font-size: 16px;
						line-height: 170%;
						letter-spacing: 0.04em;
						color: #2C95FF;
						position: absolute;
						right: 10px;
						top: 10px;
						cursor: pointer;
					\">
						Удалить
					</div>
					<img style=\"
						position: absolute;
						top: 12px;
						right: 100px;
						cursor: pointer;
					\" src=\"img/+.svg\">
					</img>
					</div>";
					$arr1 = query("SELECT id, id_user FROM hakaton_user_group WHERE id_group=".$farr["id"].";");
					
					foreach ($arr1 as $farr1)
					{
						echo "<div style=\"
							background: #FFFFFF;
							box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.05);
							border-radius: 3px;
							width: 80%;
							position: relative;
							left: 10%;
							padding-top: 10px;
							padding-left: 10px;
							padding-bottom: 10px;
							font-family: Roboto;
							font-style: normal;
							font-weight: 500;
							font-size: 18px;
							line-height: 21px;
							letter-spacing: 0.04em;
							color: #292929;
						\"><img src=\"img/user.svg\" style=\"margin-right: 10px;width: 25px;\">
						".query("SELECT title FROM hakaton_user WHERE id=".$farr1["id_user"].";")[0]["title"]."
						<div onmousemove=\"$(this).css('text-decoration-line','underline');\" onmouseout=\"$(this).css('text-decoration-line','none');\" style=\"
							font-family: Roboto;
							font-style: normal;
							font-weight: normal;
							font-size: 16px;
							line-height: 170%;
							letter-spacing: 0.04em;
							color: #2C95FF;
							position: absolute;
							right: 10px;
							top: 10px;
							cursor: pointer;
						\">
							Удалить
						</div>
						</div>";
					}

			$arhed=query("SELECT * FROM hakaton_education WHERE id_parent=".$_SESSION["id"].";");
			foreach($arhed as $farhed)
			{
				$vfarr=query("SELECT id FROM hakaton_subscribe WHERE id_user=".$_SESSION["id"]." and id_education='".$farhed["id"]."';");
				if(isset($vfarr[0]["id"]))
				{			
					
					$nfrarr[] = "";
					$rarr=explode("_", recrazd($farhed["id"]));
					if($_SESSION["firm"]!="")
					{
						$vfarr=query("SELECT id FROM hakaton_subscribe WHERE id_user=".$_SESSION["firm"]." and id_education='".$farhed["id"]."';");
						if(!isset($vfarr[0]["id"])){break;}
					}
					echo "<div class=\"main_education\" style=\"float: none;\" tag=\"";
						foreach($rarr as $frarr)
						if((strlen($frarr)>2)&&(!in_array($frarr, $nfrarr)))
						{
							echo $frarr."_";
							$nfrarr[]=$frarr;
						}
						unset($nfrarr);
						$nfrarr[] = "";
						echo "\">";
						
						echo "<img style=\"float: left; width: 180px;\" src=\"img/th_".$farhed["id"].".png\"></img>";
						
						if($_SESSION["firm"]=="")
						{
							$vfarr=query("SELECT id FROM hakaton_subscribe WHERE id_user=".$_SESSION["id"]." and id_education='".$farhed["id"]."';");
							if(isset($vfarr[0]["id"]))
							{
								echo "<img style=\"
											position: absolute;
											right: 10px;
											top: 10px;
										\" src=\"img/Star1.svg\" onclick=\"del_education('".$_SESSION["id"]."', '".$farhed["id"]."'); $(this).attr('src', 'img/Star.svg'); $(this).attr('onclick', 'del_education(\'".$_SESSION["id"]."\', \'".$farhed["id"]."\');');\"></img>";
							}
							else
							{
								echo "<img style=\"
											position: absolute;
											right: 10px;
											top: 10px;
										\" src=\"img/Star.svg\" onclick=\"add_education('".$_SESSION["id"]."', '".$farhed["id"]."'); $(this).attr('src', 'img/Star1.svg'); $(this).attr('onclick', 'add_education(\'".$_SESSION["id"]."\', \'".$farhed["id"]."\');');\"></img>";
							}
						}
						
						echo "<div onclick=\"window.open('thm.php?id=".$farhed["id"]."');\" onmouseout=\"$(this).css('text-decoration-line', 'none'); $(this).css('color', '#292929'); \" onmousemove=\"$(this).css('text-decoration-line', 'underline'); $(this).css('color', '#2C95FF;'); \" style=\"
							font-family: Roboto;
							font-style: normal;
							font-weight: 500;
							font-size: 24px;
							line-height: 130%;
							letter-spacing: 0.04em;
							text-decoration-line: none;
							color: #292929;
							position: absolute;
							left: 200px;
							margin-right: 20px;
							top: 60px;
							cursor: pointer;
						\">".$farhed["title"]."</div>";
						echo "<div style=\"
								position: absolute;
								top: 180px;
								left: 200px;
							\">";
							$i=0;
							foreach($rarr as $frarr)
							if((strlen($frarr)>3)&&(!in_array($frarr, $nfrarr)))
							{
								echo "<div style=\"
									font-family: Roboto;
									font-style: normal;
									font-weight: 500;
									font-size: 12px;
									line-height: 120%;
									letter-spacing: 0.04em;
									color: #9F9F9F;
									float: left;
									background: #FFFFFF;
									border: 1px solid #E7E7E7;
									box-sizing: border-box;
									border-radius: 24px;
									padding-left: 10px;
									padding-bottom: 5px;
									padding-top: 5px;
									padding-right: 10px;\">";
								echo "#".$frarr;
								echo "</div>";
								$nfrarr[]=$frarr;
								$i++;
								if($i>4){break;}
							}
						echo "</div>";
					echo "</div>";
				}
			}					
				}
				echo "</div>";
				
			}
		?>	
		
		</div>
		
<div style="
			position: absolute;
			top: 350%;
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
