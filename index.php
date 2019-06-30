<?php 
	header("Content-type: text/html; charset=utf-8"); 
?>
<html>
	<head>
		<?php if(!isset($_utl0)){include('_head.php');include("_func.php");}?>
	</head>
	<body style="
			overflow-x: hidden;
		">
		<div style="
		position: absolute;
		width: 100%;
		height: 250%;
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
			<div onclick="$('#auth').css('display', 'block');" onmousemove="$(this).css('text-decoration-line','underline');" onmouseout="$(this).css('text-decoration-line','none');" style="
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
				cursor: pointer;
			">Войти</div>
			
			<img src="img/user.svg" style="
				position: absolute;
				top: 10px;
				right: 120px;
			">
		</div>
		<div style="
			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			font-size: 48px;
			line-height: 66px;
			letter-spacing: 0.145em;
			color: #292929;
			position: absolute;
			text-align: center;
			width: 100%;
			top: 100px;
		">
		ЛУЧШИЕ МАТЕРИАЛЫ<br>
		ДЛЯ ОБУЧЕНИЯ<br>
		СОТРУДНИКОВ
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
				top: 250px;		
			">
				Здесь представлены различные модули, групперующие темы<br>
				c обучающей информацией
			</div>
			
			<div onclick="$('#reg').css('display', 'block');" style="
				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				line-height: 170%;
				text-align: center;
				letter-spacing: 0.04em;
				position: absolute;
				top: 350px;
				box-shadow: 0px 5px 10px rgba(44, 149, 255, 0.28);
				background: #2C95FF;
				border-radius: 3px;
				width: 150px;
				padding: 5px;
				color: white;
				left: calc(50% - 75px);
				cursor: pointer;
			">
				Попробовать
			</div>
		</div>
		<div style="

		  width: 300%;
		  border-radius: 50%;
		  overflow: hidden;
		  text-align: center;
		  z-index: -1;
		  top: -175px;
		  position: absolute;
		  left: -100%;
		
		">
			<img style="
				border-radius: 50%;
			"
			src="img/bkg2.png"></img>
		</div>
		<img src="img/g2.png" style="
			position: absolute;
			width: 100%;
			left: 0px;
			top: 700px;
		"></img>
		
		<img src="img/g1.png" style="
			position: absolute;
			width: 80%;
			left: 10%;
			top: 750px;
		"></img>

	</div>
<div style="
			position: absolute;
			top: 250%;
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
		<div id="reg" style="
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
			background: rgba(17, 44, 97, 0.9);
			z-index: 10;
			display: none;
		">
			<div id="reg1" style="
				position: absolute;
				width: 380px;
				height: 630px;
				top: calc(50% - 315px);
				left: calc(50% - 190px);
				background: #fff;
			">
				<div style="
					font-family: Roboto;
					font-style: normal;
					font-weight: bold;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					text-transform: uppercase;
					color: #2C95FF;
					position: absolute;
					top: 10px;
					left: 10px;
				
				">
				РЕГИСТРАЦИЯ
				</div>
				<img src="img/x.svg" onclick="$('#reg').css('display', 'none');" style="
					position: absolute;
					top: 15px;
					right: 15px;
					cursor: pointer;
				"></img>
				
				<hr style="
					position: absolute;
					top: 36px;
					width: 100%;
				">
				<div id="reg_sotr_bt" onclick="
				$('#reg_kk1').css('display', 'block');
				$('#reg_kk2').css('display', 'block');
				$('#reg_fio').html('ФИО');
				$(this).css('border-bottom','3px solid #2C95FF'); $(this).css('color','#292929'); $('#reg_komp_bt').css('border-bottom','none'); $('#reg_komp_bt').css('color','#9F9F9F'); " style="
						font-family: Roboto;
						font-style: normal;
						font-weight: bold;
						font-size: 16px;
						line-height: 170%;
						letter-spacing: 0.04em;
						color: #292929;
						position: absolute;
						top: 90px;
						left: 30px;
						cursor: pointer;
						border-bottom: 3px solid #2C95FF;
				">
					Сотрудник
				</div>
				<div id="reg_komp_bt" onclick="
				$('#reg_fio').html('Название компании');
				$('#reg_kk1').css('display', 'none');
				$('#reg_kk2').css('display', 'none');
				$('#reg_kk2').val('');
				$(this).css('border-bottom','3px solid #2C95FF'); $(this).css('color','#292929'); $('#reg_sotr_bt').css('border-bottom','none'); $('#reg_sotr_bt').css('color','#9F9F9F'); " style="
					font-family: Roboto;
					font-style: normal;
					font-weight: bold;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #9F9F9F;
					position: absolute;
					top: 90px;
					left: 140px;
					cursor: pointer;
				">
					Компания
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
					top: 155px;
					left: 10%;
				">
				Логин
				</div>
				<input id="index_login_reg" style="
					background: #FFFFFF;
					border: 1px solid #E7E7E7;
					box-sizing: border-box;
					border-radius: 3px;
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #292929;
					position: absolute;
					top: 175px;
					width: 80%;
					left: 10%;">
				</input>
				<div style="
					font-family: Roboto;
					font-style: normal;
					font-weight: 500;
					font-size: 12px;
					line-height: 120%;
					letter-spacing: 0.04em;
					color: #9F9F9F;
					position: absolute;
					top: 230px;
					left: 10%;
				">
				Пароль
				</div>				
				<input id="index_pwd_reg" type="password" style="
					background: #FFFFFF;
					border: 1px solid #E7E7E7;
					box-sizing: border-box;
					border-radius: 3px;
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #292929;
					position: absolute;
					top: 250px;
					width: 80%;
					left: 10%;">
				</input>
				<div style="
					font-family: Roboto;
					font-style: normal;
					font-weight: 500;
					font-size: 12px;
					line-height: 120%;
					letter-spacing: 0.04em;
					color: #9F9F9F;
					position: absolute;
					top: 300px;
					left: 10%;
				">
				Повторите пароль
				</div>				
				<input id="index_pwd_reg2" type="password" style="
					background: #FFFFFF;
					border: 1px solid #E7E7E7;
					box-sizing: border-box;
					border-radius: 3px;
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #292929;
					position: absolute;
					top: 320px;
					width: 80%;
					left: 10%;">
				</input>
				
				<div id="reg_fio" style="
					font-family: Roboto;
					font-style: normal;
					font-weight: 500;
					font-size: 12px;
					line-height: 120%;
					letter-spacing: 0.04em;
					color: #9F9F9F;
					position: absolute;
					top: 370px;
					left: 10%;
				">
				ФИО
				</div>
				<input id="index_title_reg" style="
					background: #FFFFFF;
					border: 1px solid #E7E7E7;
					box-sizing: border-box;
					border-radius: 3px;
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #292929;
					position: absolute;
					top: 390px;
					width: 80%;
					left: 10%;">
				</input>
				
				<div id="reg_kk1" style="
					font-family: Roboto;
					font-style: normal;
					font-weight: 500;
					font-size: 12px;
					line-height: 120%;
					letter-spacing: 0.04em;
					color: #9F9F9F;
					position: absolute;
					top: 430px;
					left: 10%;
				">
				Код компании
				</div>
				<input id="reg_kk2" id="index_login_reg" style="
					background: #FFFFFF;
					border: 1px solid #E7E7E7;
					box-sizing: border-box;
					border-radius: 3px;
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #292929;
					position: absolute;
					top: 450px;
					width: 80%;
					left: 10%;">
				</input>
								
				<div onclick="
							$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=registration&login='+$('#index_login_reg').val()+'&pwd='+$('#index_pwd_reg').val()+'&title='+$('#index_title_reg').val()+'&firm='+$('#reg_kk2').val(), success: function(data)
								{	
									if(data=='OK')
									{
										alert('Регистрация прошла успешно!');
									} else
										if(data=='error')
										{
											alert('Произошла ошибка при попытке выполнить операцию!');
										} else
											if(data!='')
											{
												alert(data);
											}
								}
							});
						"
					style="
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					text-align: center;
					letter-spacing: 0.04em;
					position: absolute;
					top: 510px;
					box-shadow: 0px 5px 10px rgba(44, 149, 255, 0.28);
					background: #2C95FF;
					border-radius: 3px;
					width: 170px;
					padding: 5px;
					color: white;
					left: calc(50% - 85px);
					cursor: pointer;
				">
				Регистрация
				</div>
				
				<hr style="
					position: absolute;
					top: 570px;
					width: 100%;"
				>
				<div onclick="
						$('#reg').css('display', 'none');
						$('#auth').css('display', 'block');
				"
				style="
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #2C95FF;
					text-align: center;
					top: 590px;
					position: absolute;
					width: 100%;
					cursor: pointer;
				">
					Вход
				</div>				
			</div>
		</div>
				<div id="auth" style="
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
			background: rgba(17, 44, 97, 0.9);
			z-index: 10;
			display: none;
		">
			<div id="auth1" style="
				position: absolute;
				width: 380px;
				height: 520px;
				top: calc(50% - 260px);
				left: calc(50% - 190px);
				background: #fff;
			">
				<div style="
					font-family: Roboto;
					font-style: normal;
					font-weight: bold;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					text-transform: uppercase;
					color: #2C95FF;
					position: absolute;
					top: 10px;
					left: 10px;
				
				">
				ВХОД
				</div>
				<img src="img/x.svg" onclick="$('#auth').css('display', 'none');" style="
					position: absolute;
					top: 15px;
					right: 15px;
					cursor: pointer;
				"></img>
				
				<hr style="
					position: absolute;
					top: 36px;
					width: 100%;
				">
				<div id="auth_sotr_bt" onclick="$(this).css('border-bottom','3px solid #2C95FF'); $(this).css('color','#292929'); $('#auth_komp_bt').css('border-bottom','none'); $('#auth_komp_bt').css('color','#9F9F9F'); " style="
						font-family: Roboto;
						font-style: normal;
						font-weight: bold;
						font-size: 16px;
						line-height: 170%;
						letter-spacing: 0.04em;
						color: #292929;
						position: absolute;
						top: 90px;
						left: 30px;
						cursor: pointer;
						border-bottom: 3px solid #2C95FF;
				">
					Сотрудник
				</div>
				<div id="auth_komp_bt" onclick="$(this).css('border-bottom','3px solid #2C95FF'); $(this).css('color','#292929'); $('#auth_sotr_bt').css('border-bottom','none'); $('#auth_sotr_bt').css('color','#9F9F9F'); " style="
					font-family: Roboto;
					font-style: normal;
					font-weight: bold;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #9F9F9F;
					position: absolute;
					top: 90px;
					left: 140px;
					cursor: pointer;
				">
					Компания
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
					top: 155px;
					left: 10%;
				">
				Логин
				</div>
				<input id="index_login" style="
					background: #FFFFFF;
					border: 1px solid #E7E7E7;
					box-sizing: border-box;
					border-radius: 3px;
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #292929;
					position: absolute;
					top: 175px;
					width: 80%;
					left: 10%;">
				</input>
				<div style="
					font-family: Roboto;
					font-style: normal;
					font-weight: 500;
					font-size: 12px;
					line-height: 120%;
					letter-spacing: 0.04em;
					color: #9F9F9F;
					position: absolute;
					top: 230px;
					left: 10%;
				">
				Пароль
				</div>				
				<input id="index_pwd" type="password" style="
					background: #FFFFFF;
					border: 1px solid #E7E7E7;
					box-sizing: border-box;
					border-radius: 3px;
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #292929;
					position: absolute;
					top: 250px;
					width: 80%;
					left: 10%;">
				</input>
				<div onclick="
						$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=login&login='+$('#index_login').val()+'&pwd='+$('#index_pwd').val(), success: function(data)
							{
								if(data!='error')
								{
									window.open('main.php','_self');
								}
								else
								{
									alert('Не верный логин/пароль!');
								}
							}
						});
					"
					style="
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					text-align: center;
					letter-spacing: 0.04em;
					position: absolute;
					top: 350px;
					box-shadow: 0px 5px 10px rgba(44, 149, 255, 0.28);
					background: #2C95FF;
					border-radius: 3px;
					width: 150px;
					padding: 5px;
					color: white;
					left: calc(50% - 75px);
					cursor: pointer;
				">
				Войти
				</div>
				<div style="
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #2C95FF;
					text-align: center;
					top: 420px;
					position: absolute;
					width: 100%;
					cursor: pointer;
				">
					Забыли пароль?
				</div>
				<hr style="
					position: absolute;
					top: 450px;
					width: 100%;"
				>
				<div onclick="
						$('#reg').css('display', 'block');
						$('#auth').css('display', 'none');
				"
				style="
					font-family: Roboto;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 170%;
					letter-spacing: 0.04em;
					color: #2C95FF;
					text-align: center;
					top: 475px;
					position: absolute;
					width: 100%;
					cursor: pointer;
				">
					Регистрация
				</div>				
			</div>
		</div>
	</body>
	<script>

	</script>
</html>
