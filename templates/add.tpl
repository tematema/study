<div class = "content">
		<div class = "header"><h1 align = "center">Добавление дисциплины</h1><hr></div>
		<div class = "info">
			<form id = "form" name="input" action="add_disc.php" method="post">
				<p>Название:<input type = "text" name = "name" id = "name" value = ""></p>
				<p>Псевдоним:<input type = "text" name = "alias" id = "alias" value = ""></p>
				<p>Кафедра:<select name = "kaf_id" id = "kaf_id">
					 {foreach from = $kafs key = id item = kaf}
					 	<option  value = "{$id}"> {$kaf} </option>
					 {/foreach}
				</select></p>
				<input type = "text" name = "id" id = "id" value = "{$disc.id}" style = "display: none">
				<input type = "submit" value = "Сохранить">
			</form>
		</div>
		<!-- <div class = "buttons">
			<div id = "cancel" class = "button">Назад</div>
			<div id = "save" class = "button">Сохранить</div>
		</div>  -->
	</div>