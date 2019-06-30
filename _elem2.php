<?php
include("_func.php");

if (isset($_POST["elem"])) {
	if (($_POST["elem"] == "group") or ($_POST["elem"] == "user_group")) {
		/*
		if (!isset($_SESSION["id"]) or empty($_SESSION["id"]) or !isset($_SESSION["firm"]) or empty($_SESSION["firm"]) or !isset($_POST["operationType"]) or empty($_POST["operationType"])) {
			echo "error";
			return;
		}
		*/
		if ($_POST["elem"] == "group") {
			if ($_POST["operationType"] == "insert") {
				if (!isset($_POST["title"]) or empty($_POST["title"])) {
					echo "Поле 'Заголовок' не должно быть пустым!";
					return;
				}
				query("INSERT INTO hakaton_group (id,title,group_number) VALUES ((SELECT  COALESCE(MAX(id),0)+1 FROM hakaton_group),'" . $_POST["title"] . "',(SELECT COALESCE(MAX(group_number),0)+1 FROM hakaton_group));");
				echo "OK";
				return;
			}

			if ($_POST["operationType"] == "update") {
				if (!isset($_POST["id_group"]) or empty($_POST["id_group"])) {
					echo "error";
					return;
				}
				if (!isset($_POST["title"]) or empty($_POST["title"])) {
					echo "Поле 'Заголовок' не должно быть пустым!";
					return;
				}
				query("UPDATE hakaton_group SET title = '" . $_POST["title"] . "' WHERE id = " . $_POST["id_group"] . ";");
				echo "OK";
				return;
			}

			if ($_POST["operationType"] == "delete") {
				if (!isset($_POST["id_group"]) or empty($_POST["id_group"])) {
					echo "error";
					return;
				}
				query("DELETE FROM hakaton_group WHERE id = " . $_POST["id_group"] . ";");
				echo "OK";
				return;
			}
		}

		if ($_POST["elem"] == "user_group") {
			if ($_POST["operationType"] == "insert") {
				if (!isset($_POST["id_user"]) or empty($_POST["id_user"]) or !isset($_POST["id_group"]) or empty($_POST["id_group"])) {
					echo "error";
					return;
				}
				query("INSERT INTO hakaton_user_group (id,id_user,id_group) VALUES ((SELECT  COALESCE(MAX(id),0)+1 FROM hakaton_user_group)," . $_POST["id_user"] . "," . $_POST["id_group"] . ");");
				echo "OK";
				return;
			}
			if ($_POST["operationType"] == "update") {
				if (!isset($_POST["id_user_group"]) or empty($_POST["id_user_group"]) or !isset($_POST["id_group"]) or empty($_POST["id_group"])) {
					echo "error";
					return;
				}
				query("UPDATE hakaton_user_group SET id_group = " . $_POST["id_group"] . " WHERE id = " . $_POST["id_user_group"] . ";");
				echo "OK";
				return;
			}
			if ($_POST["operationType"] == "delete") {
				if (!isset($_POST["id_user_group"]) or empty($_POST["id_user_group"])) {
					echo "error";
					return;
				}
				query("DELETE FROM hakaton_user_group WHERE id = " . $_POST["id_user_group"] . ";");
				echo "OK";
				return;
			}
		}
	}

	if ($_POST["elem"] == "login") {
		$id = query("SELECT id, id_firm FROM hakaton_user WHERE login='" . $_POST["login"] . "' and password='" . $_POST["pwd"] . "';");
		if ($id[0]["id"] == "") {
			echo "error";
		} else {
			$_SESSION["id"] = $id[0]["id"];
			$_SESSION["firm"] = $id[0]["id_firm"];
			echo "OK";
		}
	}

	if ($_POST["elem"] == "registration") {
		if (empty($_POST["login"])) {
			echo "Поле 'Логин' не должно быть пустым!";
			return;
		}

		if (empty($_POST["pwd"])) {
			echo "Поле 'Пароль' не должно быть пустым!";
			return;
		}

		if (empty($_POST["title"])) {
			echo "Поле 'Заголовок' не должно быть пустым!";
			return;
		}

		$id = query("SELECT id, id_firm FROM hakaton_user WHERE login='" . $_POST["login"] . "';");
		if (!empty($id[0]["id"])) {
			echo "Данный логин уже занят!";
			return;
		}

		if ((isset($_POST["firm"]))and($_POST["firm"]!="")) {
			query("INSERT INTO hakaton_user (id,id_firm,login,password,title) VALUES ((SELECT  COALESCE(MAX(id),0)+1 FROM hakaton_user),'" . $_POST["firm"] . "','" . $_POST["login"] . "','" . $_POST["pwd"] . "','" . $_POST["title"] . "');");
		} else {
			query("INSERT INTO hakaton_user (id,login,password,title) VALUES ((SELECT  COALESCE(MAX(id),0)+1 FROM hakaton_user),'" . $_POST["login"] . "','" . $_POST["pwd"] . "','" . $_POST["title"] . "');");
		}

		echo "OK";
	}

	if ($_POST["elem"] == "node") { }

	if ($_POST["elem"] == "education") {
		if (isset($_POST["mymain"])) {
			$vfarr = query("SELECT id FROM hakaton_subscribe WHERE id_user=" . $_SESSION["id"] . " and id_education='" . $farhed["id"] . "';");
			if (isset($vfarr[0]["id"])) {
				$nfrarr[] = "";
				$rarr = explode("_", recrazd($farhed["id"]));
				if ($_SESSION["firm"] != "") {
					$vfarr = query("SELECT id FROM hakaton_subscribe WHERE id_user=" . $_SESSION["firm"] . " and id_education='" . $farhed["id"] . "';");
					if (!isset($vfarr[0]["id"])) {
						break;
					}
				}
				echo "<div class=\"main_education\" tag=\"";
				foreach ($rarr as $frarr)
					if ((strlen($frarr) > 2) && (!in_array($frarr, $nfrarr))) {
						echo $frarr . "_";
						$nfrarr[] = $frarr;
					}
				unset($nfrarr);
				$nfrarr[] = "";
				echo "\">";

				echo "<img style=\"float: left; width: 180px;\" src=\"img/th_" . $farhed["id"] . ".png\"></img>";

				if ($_SESSION["firm"] == "") {
					$vfarr = query("SELECT id FROM hakaton_subscribe WHERE id_user=" . $_SESSION["id"] . " and id_education='" . $farhed["id"] . "';");
					if (isset($vfarr[0]["id"])) {
						echo "<img style=\"
										position: absolute;
										right: 10px;
										top: 10px;
									\" src=\"img/Star1.svg\" onclick=\"del_education('" . $_SESSION["id"] . "', '" . $farhed["id"] . "'); $(this).attr('src', 'img/Star.svg'); $(this).attr('onclick', 'del_education(\'" . $_SESSION["id"] . "\', \'" . $farhed["id"] . "\');');\"></img>";
					} else {
						echo "<img style=\"
										position: absolute;
										right: 10px;
										top: 10px;
									\" src=\"img/Star.svg\" onclick=\"add_education('" . $_SESSION["id"] . "', '" . $farhed["id"] . "'); $(this).attr('src', 'img/Star1.svg'); $(this).attr('onclick', 'add_education(\'" . $_SESSION["id"] . "\', \'" . $farhed["id"] . "\');');\"></img>";
					}
				}

				echo "<div onclick=\"window.open('thm.php?id=" . $farhed["id"] . "');\" onmouseout=\"$(this).css('text-decoration-line', 'none'); $(this).css('color', '#292929'); \" onmousemove=\"$(this).css('text-decoration-line', 'underline'); $(this).css('color', '#2C95FF;'); \" style=\"
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
					\">" . $farhed["title"] . "</div>";
				echo "<div style=\"
							position: absolute;
							top: 180px;
							left: 200px;
						\">";
				$i = 0;
				foreach ($rarr as $frarr)
					if ((strlen($frarr) > 3) && (!in_array($frarr, $nfrarr))) {
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
						echo "#" . $frarr;
						echo "</div>";
						$nfrarr[] = $frarr;
						$i++;
						if ($i > 4) {
							break;
						}
					}
				echo "</div>";
				echo "</div>";
			}
		} else {
			$arhed = query("SELECT * FROM hakaton_education WHERE id_parent=" . $_POST["id"] . ";");
			foreach ($arhed as $farhed) {

				$nfrarr[] = "";
				$rarr = explode("_", recrazd($farhed["id"]));
				if ($_SESSION["firm"] != "") {
					$vfarr = query("SELECT id FROM hakaton_subscribe WHERE id_user=" . $_SESSION["firm"] . " and id_education='" . $farhed["id"] . "';");
					if (!isset($vfarr[0]["id"])) {
						break;
					}
				}
				echo "<div class=\"main_education\" tag=\"";
				foreach ($rarr as $frarr)
					if ((strlen($frarr) > 2) && (!in_array($frarr, $nfrarr))) {
						echo $frarr . "_";
						$nfrarr[] = $frarr;
					}
				unset($nfrarr);
				$nfrarr[] = "";
				echo "\">";

				echo "<img style=\"float: left; width: 180px;\" src=\"img/th_" . $farhed["id"] . ".png\"></img>";

				if ($_SESSION["firm"] == "") {
					$vfarr = query("SELECT id FROM hakaton_subscribe WHERE id_user=" . $_SESSION["id"] . " and id_education='" . $farhed["id"] . "';");
					if (isset($vfarr[0]["id"])) {
						echo "<img style=\"
										position: absolute;
										right: 10px;
										top: 10px;
									\" src=\"img/Star1.svg\" onclick=\"del_education('" . $_SESSION["id"] . "', '" . $farhed["id"] . "'); $(this).attr('src', 'img/Star.svg'); $(this).attr('onclick', 'del_education(\'" . $_SESSION["id"] . "\', \'" . $farhed["id"] . "\');');\"></img>";
					} else {
						echo "<img style=\"
										position: absolute;
										right: 10px;
										top: 10px;
									\" src=\"img/Star.svg\" onclick=\"add_education('" . $_SESSION["id"] . "', '" . $farhed["id"] . "'); $(this).attr('src', 'img/Star1.svg'); $(this).attr('onclick', 'add_education(\'" . $_SESSION["id"] . "\', \'" . $farhed["id"] . "\');');\"></img>";
					}
				}

				echo "<div onclick=\"window.open('thm.php?id=" . $farhed["id"] . "');\" onmouseout=\"$(this).css('text-decoration-line', 'none'); $(this).css('color', '#292929'); \" onmousemove=\"$(this).css('text-decoration-line', 'underline'); $(this).css('color', '#2C95FF;'); \" style=\"
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
					\">" . $farhed["title"] . "</div>";
				echo "<div style=\"
							position: absolute;
							top: 180px;
							left: 200px;
						\">";
				$i = 0;
				foreach ($rarr as $frarr)
					if ((strlen($frarr) > 3) && (!in_array($frarr, $nfrarr))) {
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
						echo "#" . $frarr;
						echo "</div>";
						$nfrarr[] = $frarr;
						$i++;
						if ($i > 4) {
							break;
						}
					}
				echo "</div>";
				echo "</div>";
			}
		}
	}

	if ($_POST["elem"] == "del_education") {
		query("DELETE FROM hakaton_subscribe WHERE id_user=" . $_POST["usr"] . " and id_education='" . $_POST["ed"] . "';");
	}

	if ($_POST["elem"] == "add_education") {
		query("INSERT INTO hakaton_subscribe (id, id_user, id_education) VALUES ((SELECT max(id)+1 as mxk FROM hakaton_subscribe), " . $_POST["usr"] . ", '" . $_POST["ed"] . "');");
	}
}
