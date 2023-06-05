# (MODX)EvolutionCMS.plugins.ManagerManager.mm_minimizableSections

Виджет для плагина ManagerManager, позволяющий минимизировать секции на странице редактирования документа.


## Использует

* PHP >= 5.4
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager) >= 0.7


## Установка

Для установки распакуйте архив в `/assets/plungins/managermanager/widgets/mm_minimizablesections/`.


Смотрите также документацию:
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager).
* [(MODX)EvolutionCMS.modules.ddMMEditor](https://code.divandesign.ru/modx/ddmmeditor).


## Описание параметров

* `$params`
	* Описание: Объект параметров.
	* Допустимые значения:
		* `stdClass`
		* `arrayAssociative`
	* Значение по умолчанию: —
	
* `$params->sections`
	* Описание: ID секций, к которым применить виджет.
	* Допустимые значения:
		* `''` — все секции
		* `stringCommaSeparated`
		* `array`
	* Значение по умолчанию: `''`
	
* `$params->minimizedByDefault`
	* Описание: ID секций, которые должны быть свёрнуты по дефолту.
	* Допустимые значения:
		* `stringCommaSeparated`
		* `array`
	* Значение по умолчанию: —
	
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


### Применить ко всем секциям, ролям и шаблонам

```php
mm_minimizableSections();
```


### Применить к секциям контента и TV для пользователей с ролью `1` и документов с шаблоном `3`

```php
mm_minimizableSections([
	'sections' => 'content,tvs',
	'roles' => '1',
	'templates' => '3',
]);
```

### Применить ко всем секциям, секции TV и фоток по дефолту показывать свёрнутыми

```php
mm_minimizableSections([
	'minimizedByDefault' => 'tvs,photos',
]);
```


## Ссылки

* [Home page](https://code.divandesign.ru/modx/mm_minimizablesections)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-plugins-managermanager-mm_minimizablesections)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.plugins.ManagerManager.mm_minimizableSections)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />