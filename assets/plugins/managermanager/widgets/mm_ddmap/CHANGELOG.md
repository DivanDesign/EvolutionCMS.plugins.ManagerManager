# (MODX)EvolutionCMS.plugins.ManagerManager.mm_ddMap changelog


## Version 1.7 (2023-05-24)
* \+ Parameters → `$params->fields`: Can also be set as array, not only comma separated string.
* \+ The widget will display original text input with coordinates if Yandex Map loading fails.
* \* The widget has been renamed from `mm_ddYMap` to `mm_ddMap` because in the future we are likely to add Google Maps and OpenStreetMap as well (please [contact us](https://t.me/dd_code) if you need it).
* \* [jQuery.ddMap](https://github.com/DivanDesign/jQuery.ddMap) has been updated from 1.4 to 2.0.
* \+ README, README_ru.
* \+ CHANGELOG, CHANGELOG_ru.
* \+ Composer.json.


## Version 1.6 (2016-11-25)
* \* The widget works correctly with HTTPS. Many thanks to [@byscrimm](https://github.com/byscrimm).
* \* Parameters:
	* \* The widget now uses “named” parameters, see README → Examples (with backward compatibility).
	* \+ `$params->defaultZoom`: The new parameter. It allows to set default map zoom.
	* \+ `$params->defaultPosition`: The new parameter. It allows to set default map position when a document field is empty. Many thanks to [MrSwed](https://github.com/MrSwed) and all caring people.
* \* The map section header now contains all HTML tags from the original field title.
* \* jQuery.ddYMap has been updated to 1.4.
* \* Attention! PHP >= 5.4 is required.
* \* Attention! (MODX)EvolutionCMS.plugins.ManagerManager >= 0.7 is required.


## Version 1.5b (2015-05-08)
* \* The 2.1 version of Yandex Maps  API is used. The plugin jQuery.ddYMap 1.3.1 is used for map rendering.
* \* The `div.sectionBody` element has no longer the `tmplvars` class while creating a section.
* \* The `$w` and `$h` parameters have been renamed as `$width` and `$height` respectively.


## Version 1.4.3 (2013-12-10)
* \* Just minor changes.
* \* Unix format is currently used for line delimiters.


## Version 1.4.2 (2013-11-15)
* \* The calls of the `includeJs` function were replaced by `includeJsCss`.
* \* The including of required js and css files is currently being realized while occuring the event `OnDocFormPrerender`. The files are included as html.
* \* The file `jquery.ddMM.mm_ddYMap-1.0.1.js` has been renamed as `jquery.ddMM.mm_ddYMap.js`.
* \* The `$.ddMM.mm_ddYMap` plugin has been updated to 1.0.2:
	* \* The processing of the map search form submitting was removed because of its uselessness since the submitting bug of the main document form had been fixed.


## Version 1.4.1 (2013-10-25)
* \* Minor changes to ensure compatibility with (MODX)EvolutionCMS.plugins.ManagerManager 0.6.


## Version 1.4 (2013-10-04)
* \* The template id of a current document is set equally to `$mm_current_page['template']`.
* \* The js code was revised completely and became a stand-alone file. It is convenient because of php code cleanness and it shortens the amount of code of a document edit frame.
* \* Maps are rendered in the same order as TV names are supplied in `$tvs` parameter.
* \* Attention! (MODX)EvolutionCMS.plugins.ManagerManager >= 0.6 is required.


## Version 1.3.1 (2013-06-08)
* \* The error that occurred in Opera and IE was eliminated.


## Version 1.3 (2013-05-18)
* \+ Search control has been added.


## Version 1.2.2 (2012-11-14)
* \* The bug with no coordinates updating while dropping the placemark has been fixed.


## Version 1.2.1 (2012-11-13)
* \* The bug with no widget initialization while creating a new document has been fixed.
* \* Minor code changes.


## Version 1.2 (2012-05-02)
* \+ The code has been rewritten to provide compatibility with the second version of API Yandex Maps.
* \- The parameter `key` has been deleted (because of its irrelevance).


## Version 1.1 (2012-04-16)
* \+ The parameter `hideField` that allows showing/hiding original coordinates pole has been added.
* \* Minor changes in js-code.


## Version 1.0.1 (2012-01-13)
* \* Modx check for event `OnDocFormRender` has been added.


<link rel="stylesheet" type="text/css" href="https://raw.githack.com/DivanDesign/CSS.ddMarkdown/master/style.min.css" />
<style>ul{list-style:none;}</style>