<?php
	session_start();
	date_default_timezone_set('Europe/Moscow');
	// ini_set('display_errors','Off');
	
////////////////////
////            ////
////  КОНСТАНТЫ ////
////            ////
//////////////////// 

// ВРЕМЯ
	$datetime0=date("Y-m-d H:i:s");
	$datetime1=date("d.m.Y H:i:s");
	$datetime2=date("YmdHis");
	$date0=date("Y-m-d");
	$date1=date("m-d");
	$date2=date("d.m.Y");
	$date3=date("d.m");
	$time0=date("H:i:s");
	$time1=date("H:i");
	$dated=date("m");
	$datem=date("d");
	$datey=date("Y");
	$timeh=date("H");
	$timei=date("i");
	$times=date("s");
	$datems=date("m-d-Y");

//////////////////
////          ////
////  МАССИВЫ ////
////          ////
////////////////// 	
	
// МЕСЯЦЫ 0
	$mnth0["01"]="Январь"; $mnth0["02"]="Февраль"; $mnth0["03"]="Март"; $mnth0["04"]="Апрель"; $mnth0["05"]="Иай"; $mnth0["06"]="Июнь"; $mnth0["07"]="Июль"; $mnth0["08"]="Август"; $mnth0["09"]="Сентябрь"; $mnth0["10"]="Октябрь"; $mnth0["11"]="Ноябрь"; $mnth0["12"]="Декабрь";

// МЕСЯЦЫ 1
	$mnth1["01"]="января"; $mnth1["02"]="февраля"; $mnth1["03"]="марта"; $mnth1["04"]="апреля"; $mnth1["05"]="мая"; $mnth1["06"]="июня"; $mnth1["07"]="июля"; $mnth1["08"]="авгуса"; $mnth1["09"]="сентября"; $mnth1["10"]="октября"; $mnth1["11"]="ноября"; $mnth1["12"]="декабря";

// НЕДЕЛИ 0
	$week0[0]='Вс'; $week0[1]='Пн'; $week0[2]='Вт'; $week0[3]='Ср'; $week0[4]='Чт'; $week0[5]='Пт'; $week0[6]='Сб';

// НЕДЕЛИ 1	
	$week1[0]='Воскресение'; $week1[1]='Понедельник'; $week1[2]='Вторник'; $week1[3]='Среда'; $week1[4]='Четверг'; $week1[5]='Пятница'; $week1[6]='Суббота';	

// ИЗОБРАЖЕНИЯ
	$img0[0]='.png'; $img0[1]='.jpg'; $img0[2]='.jpeg'; $img0[3]='.svg'; $img0[4]='.ico'; $img0[5]='.bmp'; $img0[6]='.gif';

// ВИДЕО
	$vid0[0]='.mp4'; $vid0[1]='.ogv'; $vid0[2]='.webm';

// АУДИО
	$aud0[0]='.mp3'; $aud0[1]='.ogg'; $aud0[2]='.wav'; $aud0[3]='.m4a';
	
// АРХИВЫ
	$arh0[0]='.rar'; $arh0[1]='.zip'; $arh0[2]='.7z'; $arh0[3]='.tgz'; $arh0[4]='.tar'; $arh0[5]='.cab'; $arh0[6]='.iso'; $arh0[7]='.gz'; $arh0[8]='.jar'; $arh0[9]='.pak';	

// ЧЕРТЕЖИ
	$crt0[0]='.stl'; $crt0[1]='.cdw'; $crt0[2]='.frw'; $crt0[3]='.kdw'; $crt0[4]='.spw'; $crt0[5]='.a3d'; $crt0[6]='.m3d'; $crt0[7]='.cad'; $crt0[8]='.frg'; $crt0[9]='.cdt';

// ДОКУМЕНТЫ
	$doc0[0]='.docx'; $doc0[1]='.doc'; $doc0[2]='.pdf'; $doc0[3]='.ppt'; $doc0[4]='.pptx'; $doc0[5]='.txt'; $doc0[6]='.pps'; $doc0[7]='.xlsx'; $doc0[8]='.xls'; $doc0[9]='.xlsm';

// КОД И ИСПОЛНЯЕМЫЕ ФАЙЛЫ
	$cod0[0]='.exe'; $cod0[1]='.bat'; $cod0[2]='.cmd'; $cod0[3]='.php'; $cod0[4]='.js'; $cod0[5]='.py'; $cod0[6]='.css'; $cod0[7]='.json'; $cod0[8]='.com'; $cod0[9]='.vbs'; 

//////////////////
////          ////
////  ФУНКЦИИ ////
////          ////
////////////////// 


// ЗАПРОСЫ POSTGREE
	function query($qry)
	{
		$lnk=pg_connect("host=192.168.2.2 port=5432 dbname=postgres user=postgres password=user");
		$q=@pg_query($lnk, $qry);
		for($i=0; $i<pg_num_rows($q); $i++)
			{$res[]=pg_fetch_array($q,$i,PGSQL_ASSOC);}
		if(isset($res[0]))
			return $res;
	}

	
// ЗАПРОСЫ MS-SQL	
	// function MSquery($qry)
	// {
		// $connectionInfo = array("UID" => "Sveper34@databaseme", "pwd" => "1Q3A4Z^w", "Database" => "RSrus", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0, "CharacterSet" => "UTF-8" );
		// $serverName = "tcp:databaseme.database.windows.net,1433";
		// $conn = sqlsrv_connect($serverName, $connectionInfo);
		// ini_set('mssql.charset', 'UTF-8');		
		// $arr=sqlsrv_query($conn, $qry);	
		// while($row = sqlsrv_fetch_array( $arr, SQLSRV_FETCH_ASSOC) ) 
		// { $res = $row;}
		// sqlsrv_free_stmt($arr); 
		// return $res;
	// }

//ФУНКЦИЯ СКЛОНЕНИЯ	
	function ending($num, $first, $second, $third) 
	{
		$num = $num%100;
	   
		if ($num < 21 && $num > 4)
			return $third;
	 
		$num = $num%10;
	 
		if ($num == 1)
			return $first;
		
		if ($num > 1 && $num < 5)
			return $second;
	 
		return $third;
	}

//ФУНКЦИЯ ОПРЕДЕЛЕНИЯ ТИПА ФАЙЛА
	function typefile($file)
	{	
		global $aud0;
		global $vid0;
		global $img0;
		global $arh0;
		global $crt0;
		global $doc0;
		global $cod0;
		
		$type="file";
		$ras=".".array_pop(explode(".", $file));
		
		foreach($aud0 as $faud)
			{if($ras==$faud){$type="aud";}}
			
		foreach($vid0 as $fvid)
			{if($ras==$fvid){$type="vid";}}		

		foreach($img0 as $fimg)
			{if($ras==$fimg){$type="img";}}	

		foreach($arh0 as $farh)
			{if($ras==$farh){$type="arh";}}	
			
		foreach($crt0 as $fcrt)
			{if($ras==$fcrt){$type="crt";}}	
			
		foreach($doc0 as $fdoc)
			{if($ras==$fdoc){$type="doc";}}		
			
		foreach($cod0 as $fcod)
			{if($ras==$fcod){$type="cod";}}	
		
		return $type;
	}

//ФУНКЦИЯ ПОЛУЧЕНИЯ IP АДРЕСА ПОЛЬЗОВАТЕЛЯ
	function getip() 
	{
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';

		return $ipaddress;
	}
	
//ФУНКЦИЯ ПОИСКА ЭЛЕМЕНТА ПО АТРИБУТУ (ФУНКЦИЯ ДЛЯ DOMDocument)
	function getElementsByAttr($dom, $ClassName, $attr, $tagName=null) 
	{
		if($tagName)
		{
			$els = $dom->getElementsByTagName($tagName);
		}
		else 
		{
			$els = $dom->getElementsByTagName("*");
		}
		$res = array();
		for($i=0;$i<$els->length;$i++) 
		{
			if($els->item($i)->attributes->getNamedItem($attr))
			{
				if($els->item($i)->attributes->getNamedItem($attr)->nodeValue == $ClassName) 
				{
					$res[]=$els->item($i);
				}
			}
		}
		return $res;
	}
	
	
	function recrazd($id)
	{
		$res = "";
		$arhed=query("SELECT * FROM hakaton_education WHERE id_parent=".$id.";");
		if(isset($arhed[0]["id"]))
		{
			foreach($arhed as $farhed)
			{
				$res = $res.str_ireplace("-", "_", str_ireplace(" ", "_", str_ireplace(".", "_", $farhed["title"])))."_";
				$res = $res."_".recrazd($farhed["id"]);
			}
		}
		return mb_strtolower($res);
	}
?>