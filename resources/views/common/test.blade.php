<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<script>

		var loop = setInterval(function () {
			console.log(loop);
		}, 1000);
		sendNotification('Верните Линуса!', {
			body: 'Тестирование HTML5 Notifications',
			dir: 'auto'
		});

		function sendNotification(title, options) {
			navigator.serviceWorker.register('/sw.js');
			Notification.requestPermission(function(result) {
			  if (result === 'granted') {
			    navigator.serviceWorker.ready.then(function(registration) {
			      registration.showNotification('Notification with ServiceWorker');
			    });
			  }
			});
			// Проверим, поддерживает ли браузер HTML5 Notifications
			if (!("Notification" in window)) {
				alert('Ваш браузер не поддерживает HTML Notifications, его необходимо обновить.');
			}

			// Проверим, есть ли права на отправку уведомлений
			else if (Notification.permission === "granted") {
				// Если права есть, отправим уведомление
				var notification = new Notification(title, options);

				function clickFunc() { alert('Пользователь кликнул на уведомление'); }

				notification.onclick = clickFunc;
				}

				// Если прав нет, пытаемся их получить
				else if (Notification.permission !== 'denied') {
				Notification.requestPermission(function (permission) {
				// Если права успешно получены, отправляем уведомление
				if (permission === "granted") {
					alert('grant');
					var notification = new Notification(title, options);

				} else {
				alert('Вы запретили показывать уведомления'); // Юзер отклонил наш запрос на показ уведомлений
				}
			});
			} else {
				alert('err');
			// Пользователь ранее отклонил наш запрос на показ уведомлений
			// В этом месте мы можем, но не будем его беспокоить. Уважайте решения своих пользователей.
			}
		}
		</script>
	</body>
</html>
