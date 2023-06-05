# (MODX)EvolutionCMS.plugins.ManagerManager.mm_minimizableSections

A widget for ManagerManager plugin that allows sections to be minimizable on the document edit page.


## Requires

* PHP >= 5.4
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager) >= 0.7


## Installation

To install you must unzip the archive to `/assets/plungins/managermanager/widgets/mm_minimizablesections/`.


You may also read this documentation:
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager).
* [(MODX)EvolutionCMS.modules.ddMMEditor](https://code.divandesign.ru/modx/ddmmeditor).


## Parameters description

* `$params`
	* Desctription: The object of parameters.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* Default value: —
	
* `$params->sections`
	* Desctription: The ID(s) of the sections that the widget is applied to.
	* Valid values:
		* `''` — all sections
		* `stringCommaSeparated`
		* `array`
	* Default value: `''`
	
* `$params->minimizedByDefault`
	* Desctription: The ID(s) of the sections that should be minimized by default.
	* Valid values:
		* `stringCommaSeparated`
		* `array`
	* Default value: —
	
* `$params->roles`
	* Desctription: The CMS user roles that the widget is applied to.
	* Valid values:
		* `array`
		* `stringCommaSeparated`
		* `''` — when this parameter is empty then widget is applied to the all roles
	* Default value: `''`
	
* `$params->roles[$i]`
	* Desctription: CMS user role ID.
	* Valid values: `integer`
	* **Required**
	
* `$params->templates`
	* Desctription: Document templates IDs for which the widget is applied to.
	* Valid values:
		* `array`
		* `stringCommaSeparated`
		* `''` — empty value means the widget is applying to all templates
	* Default value: `''`
	
* `$params->templates[$i]`
	* Desctription: Template ID.
	* Valid values: `integer`
	* **Required**


## CMS events

* `OnDocFormPrerender`
* `OnDocFormRender`


## Examples


### Apply to all sections for all roles and templates

```php
mm_minimizableSections();
```


### Apply to the content and Template Variables sections for users with role `1` editing the documents with the template ID equals `3`

```php
mm_minimizableSections([
	'sections' => 'content,tvs',
	'roles' => '1',
	'templates' => '3',
]);
```

### Apply to all sections and set minimized Template variables and photos sections by default

```php
mm_minimizableSections([
	'minimizedByDefault' => 'tvs,photos',
]);
```


## Links

* [Home page](https://code.divandesign.ru/modx/mm_minimizablesections)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-plugins-managermanager-mm_minimizablesections)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.plugins.ManagerManager.mm_minimizableSections)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />