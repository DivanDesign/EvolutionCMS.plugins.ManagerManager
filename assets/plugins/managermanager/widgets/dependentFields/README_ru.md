# (MODX)EvolutionCMS.plugins.ManagerManager.mm_ddDependentFields

Плагин позволяет связать 2 поля мастер-зависимой связью:
* Зависимое поле будет использоваться (отображаться) только когда Мастер-поле имеет определённое значение.
* Значение Зависимого поля также будет очищено, когда оно не используется (скрыто).


## Использует

* PHP >= 7.4 (not tested with older versions)
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager) >= 0.7


## Установка

Для установки распакуйте архив в `/assets/plungins/managermanager/widgets/dependentFields/`.


Смотрите также документацию:
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager)
* [(MODX)EvolutionCMS.modules.ddMMEditor](https://code.divandesign.ru/modx/ddmmeditor)


## Описание параметров

* `$params`
	* Описание: Объект параметров.
	* Допустимые значения:
		* `stdClass`
		* `arrayAssociative`
	* **Обязателен**
	
* `$params->masterFieldName`
	* Описание: Имя поля документа (или TV), которое станет Мастером.
	* Допустимые значения: `string`
	* **Обязателен**
	
* `$params->masterFieldValue`
	* Описание: Значение Мастер-поля, при котором Зависимое поле будет использоваться.
	* Допустимые значения: `string`
	* Default: `null`
	
* `$params->dependentFieldName`
	* Описание: Имя поля документа (или TV), которое станет Зависимым.
	* Допустимые значения: `string`
	* **Обязателен**
	
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


### Сделать дату публикации страницы зависимой от её статуса публикации

```php
mm_ddDependentFields([
	'masterFieldName' => 'published',
	'masterFieldValue' => '1',
	'dependentFieldName' => 'pub_date',
]);
```

* `pub_date` будет отображаться только когда `published` включено (== `1`).
* Значение `pub_date` будет очищено, когда `published` выключено.


## Ссылки

* [Home page](https://code.divandesign.ru/modx/mm_dddependentfields)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-plugins-managermanager-mm_dddependentfields)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.plugins.ManagerManager.mm_ddDependentFields)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />