# E-Store-Theme
- [Введение](https://github.com/artikus11/E-Store-Theme#lesson-01-intro)
- [Создание файлов темы](https://github.com/artikus11/E-Store-Theme#lesson-02-Создание-файлов-темы)
- [Подключение файлов стилей и скрипов](https://github.com/artikus11/E-Store-Theme#lesson-03-Подключение-файлов-стилей-и-скрипов)
- [Шапка: формы, логотип, поиск, корзина](https://github.com/artikus11/E-Store-Theme#lesson-041-Шапка-формы-логотип-поиск-корзина)
- [Шапка: завершение](https://github.com/artikus11/E-Store-Theme#lesson-042-Шапка-завершение)
- [Подвал](https://github.com/artikus11/E-Store-Theme#lesson-05-Подвал)
- [Стандарные страницы](https://github.com/artikus11/E-Store-Theme#lesson-06-Стандарные-страницы)
- [Страница товара](https://github.com/artikus11/E-Store-Theme#lesson-071-Страница-товара-Начало)
- [Страница товара. Контент](https://github.com/artikus11/E-Store-Theme#lesson-072-Страница-товара-Настраиваем-контент)
- [Страница товара. Вкладки](https://github.com/artikus11/E-Store-Theme#lesson-073-Страница-товара-Настраиваем-вкладки)
- [Страница архивов товара. Сайдбар и обертки](https://github.com/artikus11/E-Store-Theme#lesson-081-Страница-архивов-товара-Настраиваем-сайдбар)
- [Страница архивов товара. Заголовки и субкатегории](https://github.com/artikus11/E-Store-Theme#lesson-082-Страница-архивов-товара-Удаляем-заголовки-и-настраиваем-подрубрики)
- [Страница архивов товара. Карточка товаров](https://github.com/artikus11/E-Store-Theme#lesson-083-Страница-архивов-товара-Настраиваем-карточку-товара)
- [Страница архивов товара. Создаем быстрый просмотр товара](https://github.com/artikus11/E-Store-Theme#lesson-084-Страница-архивов-товара-Создаем-быстрый-просмотр-товара)
- [Страница архивов товара. Создаем переключение картинок](https://github.com/artikus11/E-Store-Theme#lesson-085-Страница-архивов-товара-Создаем-переключение-картинок)
- [Страница архивов товара. Похожие, апселлы, шорткод товаров](https://github.com/artikus11/E-Store-Theme#lesson-086-Страница-архивов-товара-Похожие-апселлы-шорткод-товаров)
- [Страница корзины](https://github.com/artikus11/E-Store-Theme#lesson-091-Страница-корзины)
- [Страница оформления заказа](https://github.com/artikus11/E-Store-Theme#lesson-092-Страница-формления-заказа)

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

## Lesson 06. Стандарные страницы
Внутри файлы темы. В данный момент тема уже рабочая. В этой серии настраиваем стандартные страницы: single.php, page.php, 404.php, index.php, archive.php, search.php

Внесены изменения в файлы
```
style.css
widget-areas.php
single.php
page.php
404.php
index.php
archive.php
search.php
```

> Смотреть на YouTube [HTML2WC.Lesson 06](https://www.youtube.com/watch?v=Q0L2MAG6kmo)

## Lesson 07.1. Страница товара. Начало
Внутри файлы темы. В данный момент тема уже рабочая. В этой серии начинаем делать страницу товара и создаем начальные обертки

Внесены изменения в файлы
```
wc-functions-remove.php
wc-functions.php
```
Добавлены файлы
```
single-product.php
content-single-product.php
single-product-reviews.php
```

> Смотреть на YouTube [HTML2WC.Lesson 07.1](https://www.youtube.com/watch?v=kcu1GEkyQzA)

## Lesson 07.2. Страница товара. Настраиваем контент
Внутри файлы темы. В данный момент тема уже рабочая. В этой серии настраиваем страницу товара, а именно добавляем рейтинги, правим описание, цену, кнопку добавить в корзину, оформляем поле с количеством товара и подпиливаем переключатель вариативных товаров

Внесены изменения в файлы
```
wc-functions-remove.php
wc-functions.php
```
Добавлены файлы
```
quantity-input.php
```

> Смотреть на YouTube [HTML2WC.Lesson 07.2](https://www.youtube.com/watch?v=at0itFdYgCc)

## Lesson 07.3. Страница товара. Настраиваем вкладки
Внутри файлы темы. В данный момент тема уже рабочая. В этой серии настраиваем вкладки на странице товара и их содержимое

Внесены изменения в файлы
```
wc-functions-remove.php
wc-functions.php
review.php
review-meta.php
single-product-reviews.php
```
Добавлены файлы
```
review.php
review-meta.php
single-product-reviews.php
wc-functions-single.php
```

> Смотреть на YouTube [HTML2WC.Lesson 07.3](https://www.youtube.com/watch?v=djSr-UaPnS0)

## Lesson 08.1. Страница архивов товара. Настраиваем сайдбар
Внутри файлы темы. В данный момент тема уже рабочая. Делаем глобальные обертки для страниц архивов

Внесены изменения в файлы
```
functions.php
widget-areas.php
sidebar-shop.php
wc-function-archive.php
wc-functions-remove.php
wc-functions.php

```
Добавлены файлы
```
archive-product.php
content-product.php
content-product_cat.php
sidebar-shop.php
wc-function-archive.php

```

> Смотреть на YouTube [HTML2WC.Lesson 08.1](https://www.youtube.com/watch?v=ClFX7Z00ORg)

## Lesson 08.2. Страница архивов товара. Удаляем заголовки и настраиваем подрубрики
Внутри файлы темы. В данный момент тема уже рабочая. В этой серии настраиваем удаляем заголов на странице магазина и настраиваем вывод подрубрик

Внесены изменения в файлы
```
wc-functions.php

```
Удалены файлы
```
archive-product.php

```

> Смотреть на YouTube [HTML2WC.Lesson 08.2](https://www.youtube.com/watch?v=U9rQO26jzTM)

## Lesson 08.3. Страница архивов товара. Настраиваем карточку товаров
Внутри файлы темы. В данный момент тема уже рабочая. Настраивам карточку товаров

Внесены изменения в файлы
```
wc-function-archive.php
loop/loop-end.php

```
Добавлены файлы
```
loop/add-to-cart.php
loop/loop-end.php
loop/loop-start.php
loop/no-products-found.php
loop/orderby.php
loop/pagination.php
loop/price.php
loop/rating.php
loop/result-count.php
loop/sale-flash.php

```

> Смотреть на YouTube [HTML2WC.Lesson 08.3](https://www.youtube.com/watch?v=lB6FRlw94fE)

## Lesson 08.4. Страница архивов товара. Создаем быстрый просмотр товара
Внутри файлы темы. В данный момент тема уже рабочая. Запиливаем функционал быстрого просмотра товара на ajax

Внесены изменения в файлы
```
includes/enqueue-script-style.php
includes/ajax.php
woocommerce/includes/wc-function-archive.php
woocommerce/includes/wc-functions.php

```
Добавлены файлы
```
assets/js/ajax-quick-veiw.js

```

> Смотреть на YouTube [HTML2WC.Lesson 08.4](https://www.youtube.com/watch?v=o_xbWeiOfxk)

## Lesson 08.5. Страница архивов товара. Создаем переключение картинок
Внутри файлы темы. В данный момент тема уже рабочая. Настраиваем эффекты переклбчения картинок при наведении

Внесены изменения в файлы
```
includes/enqueue-script-style.php
woocommerce/includes/wc-function-archive.php
style.css
```


> Смотреть на YouTube [HTML2WC.Lesson 08.5](https://www.youtube.com/watch?v=7zWKq11Rayk)


## Lesson 08.6. Страница архивов товара. Похожие, апселлы, шорткод товаров
Внутри файлы темы. В данный момент тема уже рабочая. Настраиваем похожие товары, апселлы и разбираемся с шорткодом вывода товаров


Внесены изменения в файлы
```
woocommerce/single-product/related.php
woocommerce/single-product/up-sells.php
woocommerce/includes/wc-functions-single.php
woocommerce/includes/wc-functions.php
woocommerce/includes/wc-functions-remove.php
style.css
```


> Смотреть на YouTube [HTML2WC.Lesson 08.6](https://www.youtube.com/watch?v=OxnevUtvrOY)


## Lesson 09.1. Страница корзины
Внутри файлы темы. В данный момент тема уже рабочая. Настраиваем страницу корзины и добавляем новый щаблон страниц

Изменено
```
woocommerce/includes/wc-function-archive.php
style.css
```

Добавлено
```
woocommerce/cart/cart.php
woocommerce/cart/cart-totals.php
woocommerce/cart/cross-sells.php
woocommerce/cart/proceed-to-checkout-button.php
templates/no-sidebar.php

```

> Смотреть на YouTube [HTML2WC.Lesson 09.1](https://www.youtube.com/watch?v=2g2NpHufIfY)


## Lesson 09.2. Страница оформления заказа
Внутри файлы темы. В данный момент тема уже рабочая. Настраиваем страницу оформления заказа (чекаут)

Изменено
```
assets/css/bootstrap.css
style.css
```

Добавлено
```
woocommerce/cart/cart-shipping.php
woocommerce/checkout/form-coupon.php
woocommerce/checkout/payment.php
woocommerce/checkout/review-order.php
woocommerce/includes/wc-functions-checkout.php
woocommerce/notices/notice.php

```

> Смотреть на YouTube [HTML2WC.Lesson 09.2](https://www.youtube.com/watch?v=wQldCa10VrQ)
