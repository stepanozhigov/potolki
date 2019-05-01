.<div class="formUr formUr__content" id="formUrPopup">
	<h3 class="formUr__title">Редактировать юридическое лицо</h3>
	<form id="formUr" action="https://jsonplaceholder.typicode.com/posts" method="post">
		<label class="formUr__input-wrap">
			<p>Тип организации:</p>
			<div class="formUr__data-wrap formUr__select">
				<select class="" name="type">
					<option value="IP">Ип</option>
					<option value="OOO">ООО</option>
					<option value="ZAO">ЗАО</option>
				</select>
			</div>
		</label>
		<label class="formUr__input-wrap">
			<p>Название:</p>
			<input type="text" name="name" class="formUr__input" required>
		</label>
		<label class="formUr__input-wrap">
			<p>ОГРН:</p>
			<input type="tel" name="OGRN" class="formUr__input" required>
		</label>
		<label class="formUr__input-wrap">
			<p>ИНН:</p>
			<input type="tel" name="INN" class="formUr__input" required>
		</label>
		<label class="formUr__input-wrap">
			<p>БИК:</p>
			<input type="tel" name="BIK" class="formUr__input" required>
		</label>
		<label class="formUr__input-wrap">
			<p>Расчетный счет:</p>
			<input type="tel" name="score" class="formUr__input" required>
		</label>
		<div class="formUr__documents">
			<div class="formUr__documents-heading">
				<h3>Прикрепленные документы</h3>
				<label for="addDocument" class="formUr__add-document">
					<input name="" type="file" id="addDocument">
					<div class="formUr__add">Прикрепить</div>
				</label>
			</div>
			<a href="javascript:void(0);"><button class="formUr__delite" type="button" name="button"></button> <span>Свядетельство.jpg</span></a>
			<a href="javascript:void(0);"><button class="formUr__delite" type="button" name="button"></button> <span>Устав.doc</span></a>
			<a href="javascript:void(0);"><button class="formUr__delite" type="button" name="button"></button> <span>Лицензия.pdf</span></a>
		</div>
		<input type="submit" value="Готово!" class="formAdress__submit">
		<p class="formUr__status-send">Данные отправлены, спасибо!</p>
		<button class="formUr__abort">Отмена</button>
	</form>
</div>
