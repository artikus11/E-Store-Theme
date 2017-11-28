# E-Store-Theme
- [Введение](https://github.com/artikus11/E-Store-Theme#lesson-01-intro)
- [Создание файлов темы](https://github.com/artikus11/E-Store-Theme#lesson-02-Создание-файлов-темы)
- [Подключение файлов стилей и скрипов](https://github.com/artikus11/E-Store-Theme#lesson-03-Подключение-файлов-стилей-и-скрипов)
- [Шапка: формы, логотип, поиск, корзина](https://github.com/artikus11/E-Store-Theme#lesson-041-Шапка-формы-логотип-поиск-корзина)
- [Шапка: завершение](https://github.com/artikus11/E-Store-Theme#lesson-042-Шапка-завершение)
- [Подвал](https://github.com/artikus11/E-Store-Theme#lesson-05-Подвал)

Внутри лежит папка с хтмл-шаблоном electronic_store и архив e-store-theme.zip с базовой темой. Можно ничего не устанавливать, так как в последующих уроках будет полный разбор файлов. Главное площадку настроить. 

> Смотреть на YouTube [HTML2WC.Lesson 01](https://www.youtube.com/watch?v=H0WktqMIk1Y)

## Lesson 02. Создание файлов темы
Внутри файлы темы. В данный момент тема еще голая, но рабочая. Структура файлов строиться по логике вполнения функционала или части кода.

> Смотреть на YouTube [HTML2WC.Lesson 02](https://www.youtube.com/watch?v=1SBQpXrMAOY)

Структура темы
```
e-store-theme
	/assets		<-- папка под файлы фронтенда
		/css	<-- папка стилей
		/fonts	<-- папка шрифтов
		/image	<-- папка картинок
		/js		<-- папка скриптов
	/includes
		/carbon-fields				<-- папка фреймворка CarbonFields
		/custom-fields-options		<-- папка под файлы настроек и метабоксов
			metabox.php			<-- настройки метабоксов
			theme-optons.php	<-- настройки опций
		custom-header.php
		customizer.php
		enqueue-script-style.php	<-- подключение стилей и скриптов
		helpers.php					<-- вспомогательные функции
		jetpack.php
		template-functions.php	
		template-tags.php	
		theme-settings.php			<-- подключение глобальных настроек темы
		widget-areas.php			<-- подключение виджетов
		woocommerce.php
	/template-parts		<-- папка частей кода для фронтенда
	/templates			<-- папка шаблонов страниц
	/woocommerce		<-- папка настроек Вукомерса
		/includes				<-- папка c подключением настроек пофайлово
			wc-functions.php			<-- общие хуки Вукомерса
			wc-functions-remove.php		<-- хуки отключения
	404.php
	archive.php
	comments.php
	footer.php
	functions.php
	header.php
	index.php
	page.php
	screenshot.png
	search.php
	sidebar.php
	single.php
	style.css
	woocommerce.css
```

## Lesson 03. Подключение файлов стилей и скрипов
Внутри файлы темы. В данный момент тема уже рабочая. Есть начальные настройки для шапки и подвала. Добавлены файлы стилей, скрипров, шрифтов, картинок

Внесены изменения в файлы
```
theme-optons.php
enqueue-script-style.php
style.css
functions.php
woocommerce.php
```

> Смотреть на YouTube [HTML2WC.Lesson 03](https://www.youtube.com/watch?v=Itkgs5xfL1c)

## Lesson 04.1. Шапка: формы, логотип, поиск, корзина
Внутри файлы темы. В данный момент тема уже рабочая. Изменены шрифты, подключеы формы авторизации и регистрации, сделаны настройки для логотипа, созданы поиск на аяксе и выведено количество товаров на иконке корзины

Внесены изменения в файлы
```
theme-optons.php
enqueue-script-style.php
style.css
functions.php
woocommerce.php
header.php
script.js
wc-functions-remove.php
```
Добавлены файлы
```
ajax-search.js
ajax.php
wc-form-login.php
wc-form-register.php
wc-functions-cart.php
```

> Смотреть на YouTube [HTML2WC.Lesson 04.1](https://www.youtube.com/watch?v=2wIEC5WSLaY)

## Lesson 04.2. Шапка: завершение
Внутри файлы темы. В данный момент тема уже рабочая. В этой части доделываем шапку: выводим навигацию с использованием walker меню, наводим порядок по принципам WooCommerce, дорабатываем поиск, добавляем панель товаров при наведении в мини-корзине.

Внесены изменения в файлы
```
style.css
functions.php
header.php
script.js
custom-header.php
```
Добавлены файлы
```
navigations.php
login-icon.php
logo.php
mini-card.php
modal-login.php
navi.php
search.php
```

> Смотреть на YouTube [HTML2WC.Lesson 04.2](https://www.youtube.com/watch?v=s2lWxJLzFlE)

## Lesson 05. Подвал
Внутри файлы темы. В данный момент тема уже рабочая. В этой части пилим подвал: создаем несколько настроек и настраиваем виджеты в подвале.

Внесены изменения в файлы
```
style.css
functions.php
header.php
footer.php
theme-optons.php
widget-areas.php
```
Добавлены файлы
```
custom-footer.php
copyright.php
newsletter.php
widgets.php
```

> Смотреть на YouTube [HTML2WC.Lesson 05](https://www.youtube.com/watch?v=vcnuv_48_Vw)