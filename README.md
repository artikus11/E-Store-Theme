# E-Store-Theme
## Lesson 01. Intro
Внутри лежит папка с хтмл-шаблоном electronic_store и архив e-store-theme.zip с базовой темой. Можно ничего не устанавливать, так как в последующих уроках будет полный разбор файлов. Главное площадку настроить. 
## Lesson 02. Создание файлов темы
Внутри файлы темы. В данный момент тема еще голая, но рабочая. Структура файлов строиться по логике вполнения функционала или части кода.
Структура темы
- e-store-theme
	- /assets		<-- папка под файлы фронтенда
		- /css	<-- папка стилей
		- /fonts	<-- папка шрифтов
		- /image	<-- папка картинок
		- /js		<-- папка скриптов
	- /includes
		- /carbon-fields				<-- папка фреймворка CarbonFields
		- /custom-fields-options		<-- папка под файлы настроек и метабоксов
			- metabox.php			<-- настройки метабоксов
			- theme-optons.php	<-- настройки опций
		- custom-header.php
		- customizer.php
		- enqueue-script-style.php	<-- подключение стилей и скриптов
		- helpers.php					<-- вспомогательные функции
		- jetpack.php
		- template-functions.php	
		- template-tags.php	
		- theme-settings.php			<-- подключение глобальных настроек темы
		- widget-areas.php			<-- подключение виджетов
		- woocommerce.php
	- /template-parts		<-- папка частей кода для фронтенда
	- /templates			<-- папка шаблонов страниц
	- /woocommerce		<-- папка настроек Вукомерса
		- /includes	<-- папка c подключением настроек пофайлово
			- wc-functions.php			<-- общие хуки Вукомерса
			- wc-functions-remove.php		<-- хуки отключения
	- 404.php
	- archive.php
	- comments.php
	- footer.php
	- functions.php
	- header.php
	- index.php
	- page.php
	- screenshot.png
	- search.php
	- sidebar.php
	- single.php
	- style.css
	- woocommerce.css
