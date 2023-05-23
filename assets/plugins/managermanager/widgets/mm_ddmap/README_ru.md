# (MODX)EvolutionCMS.plugins.ManagerManager.mm_ddMap

Виджет для плагина ManagerManager, позволяющий интегрировать карту Yandex Maps для получения координат.

Сейчас работает только с Яндекс Картами, но в будущем, вероятно, добавим также Google Maps и OpenStreetMap.


## Использует

* PHP >= 5.4
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager) >= 0.7


## Установка

Для установки распакуйте архив в `/assets/plungins/managermanager/widgets/mm_ddmap/`.


Смотрите также документацию:
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager).
* [(MODX)EvolutionCMS.modules.ddMMEditor](https://code.divandesign.ru/modx/ddmmeditor).


## Описание параметров

* `$params`
	* Описание: Объект параметров.
	* Допустимые значения:
		* `stdClass`
		* `arrayAssociative`
	* **Обязателен**
	
* `$params->fields`
	* Описание: Имена TV, для которых необходимо применить виджет.
	* Допустимые значения:
		* `stringCommaSeparated`
		* `array`
	* **Обязателен**
	
* `$params->fields[$i]`
	* Описание: Название TV документа.
	* Допустимые значения: `string`
	* **Обязателен**
	
* `$params->mapWidth`
	* Описание: Ширина контейнера с картой.
	* Допустимые значения:
		* `integer`
		* `'auto'`
	* Значение по умолчанию: `'auto'`
	
* `$params->mapHeight`
	* Описание: Высота контейнера с картой.
	* Допустимые значения: `integer`
	* Значение по умолчанию: `400`
	
* `$params->hideOriginalInput`
	* Описание: Необходимо ли скрывать оригинальное текстовое поле с координатами.
	* Допустимые значения: `boolean`
	* Значение по умолчанию: `true`
	
* `$params->defaultZoom`
	* Описание: Дефолтный масштаб карты.
	* Допустимые значения: `integer`
	* Значение по умолчанию: `15`
	
* `$params->defaultPosition`
	* Описание: Дефолтная позиция карты, когда поле документа пустое.
	* Допустимые значения: `stringCommaSeparated`
	* Значение по умолчанию: `'55.20432131317031,61.28999948501182'`
	
* `$params->defaultPosition[0]`
	* Описание: Широта.
	* Допустимые значения: `float`
	* Значение по умолчанию: `55.20432131317031`
	
* `$params->defaultPosition[1]`
	* Описание: Долгота.
	* Допустимые значения: `float`
	* Значение по умолчанию: `61.28999948501182`
	
* `$params->roles`
	* Описание: Роли пользователей CMS, для которых необходимо применить виждет.
	* Допустимые значения:
		* `array`
		* `stringCommaSeparated`
		* `''` — применяется для всех ролей при пустом значении
	* Значение по умолчанию: `''`
	
* `$params->roles[$i]`
	* Описание: Роль пользователя CMS.
	* Допустимые значения: `integer`
	* **Обязателен**
	
* `$params->templates`
	* Описание: ID шаблонов документов, для которых необходимо применить виджет.
	* Допустимые значения:
		* `array`
		* `stringCommaSeparated`
		* `''` — применяется для всех шаблонов при пустом значении
	* Значение по умолчанию: `''`
	
* `$params->templates[$i]`
	* Описание: ID шаблона документа.
	* Допустимые значения: `integer`
	* **Обязателен**


## События CMS

* `OnDocFormPrerender`
* `OnDocFormRender`


## Примеры


### Подключение виджета Yandex Maps для TV «LatLng»

```php
mm_ddMap([
	'fields' => 'LatLng'
]);
```


## Ссылки

* [Home page](https://code.divandesign.ru/modx/mm_ddmap)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-plugins-managermanager-mm_ddmap)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.plugins.ManagerManager.mm_ddMap)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />