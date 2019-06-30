<?php
header("Content-type: text/html; charset=utf-8");
?>
<html>

<head>
	<?php if (!isset($_utl0)) {
		include('_head.php');
		include("_func.php");
	} ?>
</head>

<body>
	<input id="index_login" placeholder="Логин..." value="DarkList"></input>
	<input type="password" id="index_pwd" placeholder="Пароль..." value="123456789"></input>
	<button onclick="
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
		">Войти</button>

	<br>
	<br>
	<br>
	<input type="title" id="index_title" placeholder="Заголовок..." value="123456789"></input>
	<button onclick="
			$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=registration&login='+$('#index_login').val()+'&pwd='+$('#index_pwd').val()+'&title='+$('#index_title').val(), success: function(data)
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
		">Регистрация</button>

	<button onclick="
			$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=group&operationType=insert&title='+$('#index_title').val(), success: function(data)
				{	
					if(data=='OK')
					{
						alert('Группа успешно добавлена!');
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
		">Добавить группу</button>
	<button onclick="
			$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=group&operationType=update&id_group=1&title='+$('#index_title').val(), success: function(data)
				{	
					if(data=='OK')
					{
						alert('Группа успешно изменена!');
						return;
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
		">Изменить группу</button>
	<button onclick="
			$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=group&operationType=delete&id_group=1', success: function(data)
				{	
					if(data=='OK')
					{
						alert('Группа успешно удалена!');
						return;
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
		">Удалить группу</button>
	<button onclick="
			$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=user_group&operationType=insert&id_user=1&id_group=1', success: function(data)
				{	
					if(data=='OK')
					{
						alert('Пользователь успешно добавлен в группу!');
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
		">Добавить сотрудника в группу</button>
	<button onclick="
			$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=user_group&operationType=update&id_user_group=1&id_group=2', success: function(data)
				{	
					if(data=='OK')
					{
						alert('Группа у пользователя успешно изменена!');
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
		">Изменить группу сотрудника</button>
			<button onclick="
			$.ajax({type: 'POST', url: '_elem2.php', data: 'elem=user_group&operationType=delete&id_user_group=1&id_group=2', success: function(data)
				{	
					if(data=='OK')
					{
						alert('Группа у пользователя успешно удалена!');
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
		">Удалить группу сотрудника</button>
</body>
<script>

</script>

</html>