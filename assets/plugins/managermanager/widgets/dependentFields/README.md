# (MODX)EvolutionCMS.plugins.ManagerManager.mm_ddDependentFields

The plugin allows to link 2 fields with a master-dependent relation:
* Dependent field will only be used (displayed) only when Master field has a specific value.
* Value of Dependent field will also be cleared when it is not used (hidden).


## Requires

* PHP >= 7.4 (not tested with older versions)
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager) >= 0.7


## Installation

To install you must unzip the archive to `/assets/plungins/managermanager/widgets/dependentFields/`.


You may also read this documentation:
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager)
* [(MODX)EvolutionCMS.modules.ddMMEditor](https://code.divandesign.ru/modx/ddmmeditor)


## Parameters description

* `$params`
	* Desctription: The object of parameters.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->masterFieldName`
	* Desctription: The name of the document field (or TV) to be Master.
	* Valid values: `string`
	* **Required**
	
* `$params->masterFieldValue`
	* Desctription: The value of the Master field when the Dependent field should be used.
	* Valid values: `string`
	* Default: `null`
	
* `$params->dependentFieldName`
	* Desctription: The name of the document field (or TV) to be Dependent.
	* Valid values: `string`
	* **Required**
	
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


### Make a page's publish date dependent on its publish status

```php
mm_ddDependentFields([
	'masterFieldName' => 'published',
	'masterFieldValue' => '1',
	'dependentFieldName' => 'pub_date',
]);
```

* `pub_date` will be visible only when `published` is on (== `1`).
* Value of `pub_date` will be cleared when `published` is off.


## Links

* [Home page](https://code.divandesign.ru/modx/mm_dddependentfields)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-plugins-managermanager-mm_dddependentfields)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.plugins.ManagerManager.mm_ddDependentFields)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />