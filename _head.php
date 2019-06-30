<?php
//////////////////////////
////                  ////
////  НАСТРОЙКИ САЙТА ////
////                  ////
////////////////////////// 

// ССЫЛКА НА САЙТ
	$_utl0="192.168.2.2";
	
// НАЗВАНИЕ САЙТА
	$_title0="Tomorrow's level";

// ИКОНКА САЙТА
	$_icon0="img/favicon.png";
	
// ПОДКЛЮЧАЕМЫЕ JS
	$JavaScript = [
		0 => "jquery_",
		1 => "jquery-ui_",
		2 => "daterangepicker",
		3 => "interact",
		4 => "index",
		5 => "jquery.cookie",
		6 => "html2canvas",
		7 => "moment",
	];
	
// ПОДКЛЮЧАЕМЫЕ CSS
	$CSS = [
		0 => "daterangepicker",
		1 => "jquery-ui",
	];	
	
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" type="image/png" href="<?php echo $_icon0;?>" /> 
<title><?php echo $_title0;?></title>
<?php
	
	
	if(!isset($_POST["verprog"]))
	{
		foreach($JavaScript as $fjs)
			{echo "<script type=\"text/javascript\" src=\"".glob("js/".$fjs."*.js")[0]."\"></script>";}
			
		foreach($CSS as $fcss)
			{echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".glob("css/".$fcss."*.css")[0]."\" />";}	
	}
?>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>	
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">