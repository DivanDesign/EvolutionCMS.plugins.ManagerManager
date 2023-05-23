# (MODX)EvolutionCMS.plugins.ManagerManager.mm_ddMap

A widget for ManagerManager plugin allowing Yandex Maps integration.

Right now the library works only with Yandex Maps, but in the future we are likely to add Google Maps and OpenStreetMap as well.


## Requires

* PHP >= 5.4
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager) >= 0.7


## Installation

To install you must unzip the archive to `/assets/plungins/managermanager/widgets/mm_ddmap/`.


You may also read this documentation:
* [(MODX)EvolutionCMS.plugins.ManagerManager](https://code.divandesign.ru/modx/managermanager).
* [(MODX)EvolutionCMS.modules.ddMMEditor](https://code.divandesign.ru/modx/ddmmeditor).


## Parameters description

* `$params`
	* Desctription: The object of parameters.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->fields`
	* Desctription: TV names to which the widget is applied.
	* Valid values:
		* `stringCommaSeparated`
		* `array`
	* **Required**
	
* `$params->fields[$i]`
	* Desctription: The name of the document TV.
	* Valid values: `string`
	* **Required**
	
* `$params->mapWidth`
	* Desctription: Width of the map container.
	* Valid values:
		* `integer`
		* `'auto'`
	* Default value: `'auto'`
	
* `$params->mapHeight`
	* Desctription: Height of the map container.
	* Valid values: `integer`
	* Default value: `400`
	
* `$params->hideOriginalInput`
	* Desctription: Original coordinates field hiding status.
	* Valid values: `boolean`
	* Default value: `true`
	
* `$params->defaultZoom`
	* Desctription: Default map zoom.
	* Valid values: `integer`
	* Default value: `15`
	
* `$params->defaultPosition`
	* Desctription: Default map position when a document field is empty.
	* Valid values: `stringCommaSeparated`
	* Default value: `'55.20432131317031,61.28999948501182'`
	
* `$params->defaultPosition[0]`
	* Desctription: Latitude.
	* Valid values: `float`
	* Default value: `55.20432131317031`
	
* `$params->defaultPosition[1]`
	* Desctription: Longitude.
	* Valid values: `float`
	* Default value: `61.28999948501182`
	
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


### Yandex Maps widget connection to the “LatLng” TV

```php
mm_ddMap([
	'fields' => 'LatLng'
]);
```


## Links

* [Home page](https://code.divandesign.ru/modx/mm_ddmap)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-plugins-managermanager-mm_ddmap)
* [GitHub](https://github.com/DivanDesign/EvolutionCMS.plugins.ManagerManager.mm_ddMap)


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />