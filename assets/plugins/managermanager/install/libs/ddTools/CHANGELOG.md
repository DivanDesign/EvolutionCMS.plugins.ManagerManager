# (MODX)EvolutionCMS.libraries.ddTools changelog


## Version 0.48.1 (2021-03-29)
* \* `\DDTools\Snippet::prepareParams`: Type of only existing params will be converted.


## Version 0.48 (2021-03-25)
* \+ `\DDTools\Snippet`:
	* \+ `$paramsTypes`: The new property. Overwrite in child classes if you want to convert some parameters types.
	* \+ `prepareParams`: The parameter types will be converted respectively with `$this->paramsTypes`.


## Version 0.47 (2021-03-20)
* \+ `\DDTools\ObjectTools::convertType`:
	* \+ Added [HJSON](https://hjson.github.io/) support (closes #7).
	* \+ Improved detection of failed `json_decode` attempt.


## Version 0.46 (2021-03-15)
* \+ `\ddTools::updateDocument`: Added default values for the following parameters:
	* \+ `$docData->editedon`: If it isn't set, it will be equal to current date-time (`time()`).
	* \+ `$docData->editedby`: If it isn't set, it will be equal to `1`.


## Version 0.45.1 (2021-03-12)
* \* `\DDTools\ObjectTools::extend`:
	* \* Recursion is called only if source value is an object or array.
	* \* Optimization.


## Version 0.45 (2021-03-11)
* \+ `\DDTools\Response::isSuccess`: The new public method.


## Version 0.44 (2021-03-10)
* \+ `\DDTools\Snippet::prepareParams`: The new method.


## Version 0.43 (2021-03-10)
* \* Attention! PHP >= 5.6 is required.
* \* `\DDTools\Response`:
	* \- Child version classes are not used anymore.
	* \+ `$requiredMetaKeys`: The new field.
	* \+ `$requiredMetaMessageKeys`: The new field.
	* \+ `validateMetaMessage`: The new method.
	* \+ `setMetaMessage`: The new method.
	* \+ `validateMeta`: Can take any type of parameter and just returns `false` if it is not an array.
	* \* `toJSON`: Refactoring, `\DDTools\ObjectTools::convertType` is used instead of `json_encode`.
* \* `\DDTools\BaseClass::toJSON`: Refactoring, `\DDTools\ObjectTools::convertType` is used instead of `json_encode`.
* \+ Composer.json → `authors`: Added missing authors.


## Version 0.42 (2021-02-24)
* \* `\ddTools::verifyRenamedParams`:
	* \+ If `$params->params` set as an object, the method will return an instance of stdClass.
	* \* `\DDTools\ObjectTools::extend` is used instead of `array_merge`.
* \+ `\DDTools\Snippet`: The new abstract class for snippets.
* \* `\ddTools::getTemplateVars`, `\ddTools::getTemplateVarOutput` → Parameters → `$idnames`: Less fragile working when the parameter is a string.
* \+ README → Links → Packagist.


## Version 0.41 (2020-12-15)
* \+ `\ddTools::getDocumentIdByUrl`: Supports domains in IDNA ASCII-compatible format.


## Version 0.40.1 (2020-06-22)
* \* `\ddTools::createDocument`, `\ddTools::updateDocument`: Document field values will be prepared by `$modx->db->escape()`.
* \+ `\ddTools::createDocument` → Parameters → `$docData->pagetitle`: Can't be equal to `''`, so will be equal to `'New resource'` in this case.


## Version 0.40 (2020-06-19)
* \* `\DDTools\FilesTools::modifyImage`:
	* \+ Supports `.ico` and `.bmp`.
	* \+ `$params->watermarkImageFullPathName`: The new parameter. You can overlay your image with needed watermark image.
	* \+ `$params->sourceFullPathName`, `$params->outputFullPathName`: Can be equal to relative paths too, the method will automatically add `base_path` if needed.
	* \+ `$params->outputFullPathName`: Is not required anymore and by default is be equal to `$params->sourceFullPathName`.
	* \+ `$params->allowEnlargement`: Is not required anymore and by default is equal to `0`.
	* \+ `$params->backgroundColor`: Is not required anymore and by default is equal to `FFFFFF`.
	* \+ `$params->quality`: Is not required anymore and by default is equal to `100`.
	* \* `$params->allowEnlargement`: Type changed to boolean (with backward compatibility).
	* \* PHP.libraries.phpThumb: Updated from 1.7.13-201406261000 to 1.7.15-202004301145.
	* \* Refactoring.
* \+ README → Documentation → Parameters description → `\DDTools\FilesTools` → `\DDTools\FilesTools::modifyImage($params)`.


## Version 0.39 (2020-06-07)
* \+ `\ddTools::createDocument` → Parameters → `$docData->alias`: Will be transliterated from `$docData->pagetitle` if empty or not set.
* \* README → Documentation → Installation → Using Composer: Fixed the library name.


## Version 0.38.1 (2020-06-02)
* \* `\DDTools\ObjectTools::convertType`: Fixed type of deep objects when `$params->type` == `'objectarray'`.
* \* README:
	* \- Home page.
	* \+ Links.


## Version 0.38 (2020-06-02)
* \+ `\DDTools\ObjectTools::convertType`: The new method. Converts an object type. Arrays, JSON and Query string objects are also supported.
* \* `\ddTools::encodedStringToArray`:
	* \* Now uses `\DDTools\ObjectTools::convertType`.
	* \* Style of CMS log message was improved.


## Version 0.37.1 (2020-05-28)
* \* `ddTools::createDocument`:
	* \* Parameters → `$docData->pagetitle`: Is not required anymore and by default will be equal to `'New resource'`.
	* \* Small refactoring.


## Version 0.37 (2020-05-24)
* \* `\ddTools::sort2dArray`:
	* \+ Associative arrays are also supported.
	* \* Small refactoring.


## Version 0.36 (2020-05-18)
* \+ `\ddTools::prepareDocData`, `\ddTools::createDocument`, `\ddTools::updateDocument`: Also can take document fields as stdClass, not only as an associative array.


## Version 0.35.1 (2020-05-08)
* \* Composer.json:
	* \+ `authors`.
	* \* `name`: Changed from `dd/modxevo-library-ddtools` to `dd/evolutioncms-libraries-ddtools`.
	* \* `homepage`: Link changed to HTTPS.


## Version 0.35 (2020-05-06)
* \+ `\DDTools\BaseClass::toArray`. Returns all properties of this object as an associative array independent of their visibility.
* \+ `\DDTools\BaseClass::toJSON`. Returns all properties of this object as an JSON string independent of their visibility.
* \+ `\DDTools\BaseClass::__toString()`. The same as `\DDTools\BaseClass::toJSON()`.
* \+ README → Parameters description:
	* \+ `\DDTools\BaseClass`.
	* \+ Small improvements.


## Version 0.34 (2020-04-30)
* \+ `\DDTools\ObjectTools::extend`:
	* \+ Added the ability to prevent fields overwriting with empty values (`$params->overwriteWithEmpty`).
	* \+ Objects can extend arrays and vice versa.
	* \+ Types of nested objects are independent on types of their parents.
* \+ `\DDTools\ObjectTools::isPropExists`. Checks if the object, class or array has a property / element (see README).
* \+ `\DDTools\ObjectTools::getPropValue`. Get the value of an object property or an array element (see README).
* \+ `\DDTools\ObjectTools::isObjectOrArray`. Finds whether a variable is an array or an object. The method is private for now, because we will need to think more about the parameters.


## Version 0.33.1 (2020-04-29)
* \* `\DDTools\ObjectTools::extend`: Fixed array deep extending error if an original array item is not exist.


## Version 0.33 (2020-04-28)
* \+ `\DDTools\ObjectTools::extend`: Arrays can also be extended.
* \* CHANGELOG: Fixed misprints.


## Version 0.32 (2020-04-25)
* \* `\ddTools::verifyRenamedParams`:
	* \* Pass-by-name style is used (with backward compatibility).
	* \+ Added an ability to prevent writing to the CMS event log (see `$params->writeToLog`).
	* \+ Added an ability to return all parameters, not only corrected (see `$params->returnCorrectedOnly`).
	* \+ `$params->params` can be set as `stdClass` too.
	* \+ Improved message style in the CMS log event.
	* \* Small refactoring.
* \+ README → Documentation:
	* \+ Parameters description → `\ddTools::verifyRenamedParams($params)`.
	* \+ Examples → Verify renamed snippet params (`\ddTools::verifyRenamedParams($params)`).


## Version 0.31 (2020-04-23)
* \+ `\DDTools\ObjectTools::extend`. Merge the contents of two or more objects together into the first object (see README.md).
* \* README: Style improvements.


## Version 0.30 (2020-02-11)
* \* Attention! (MODX)EvolutionCMS >= 1.1 is required.
* \+ `\ddTools::getDocumentParentIds`. Gets the parent ID(s) of the required level.
* \+ `\ddTools::clearCache`. Clears cache of required document(s) and their parents.
* \+ `\ddTools::updateDocument`: Cache of the updated docs and their parents will be cleared.


## Version 0.29.1 (2019-12-15)
* \* `\DDTools\BaseClass::setProp`: Do nothing if property is not exist.


## Version 0.29 (2019-12-14)
* \+ `\DDTools\BaseClass::setExistingProps`: Can set properties of all parent and child classes.


## Version 0.28 (2019-10-22)
* \+ `\DDTools\FilesTools::createDir` (and `\ddTools::createDir` as alias): Makes directory using `$modx->config['new_folder_permissions']`. Nested directories will be created too. Doesn't throw an exception if the folder already exists.


## Version 0.27 (2019-09-19)
* \+ `\ddTools::encodedStringToArray`: Can take an array too (sometimes it's convenient to not think about it).


## Version 0.26 (2019-09-09)
* \* Attention! Backward compatibility with 0.25 is broken.
* \- `\DDTools\ObjectTools`.
* \+ `\DDTools\BaseClass`.
* \+ `\DDTools\BaseClass::setExistingProps`: Can set private properties too.
* \* `\DDTools\BaseClass::createChildInstance`: Fixed some bugs.


## Version 0.25 (2019-06-27)
* \+ `\DDTools\ObjectTools::setExistingProps`: The new method. Sets existing object properties.
* \+ `\DDTools\ObjectTools::createChildInstance`: The new method. Creates an instance of the needed child class (e. g. `\ddSendFeedback\Sender\Telegram\Sender`).


## Version 0.24 (2018-12-25)
* \+ `\ddTools::parseSource`: Uncashed snippets will be evaled too.
* \* Some refactoring and alpha functional.


## Version 0.23 (2018-06-26)
* \+ `\ddTools::parseText`: `$params->data` can be set now as `stdClass`.
* \* `\ddTools::encodedStringToArray`: Fixed event logging if `$inputString` is empty.


## Version 0.22 (2018-06-17)
* \+ `\ddTools::sendMail`: SMTP support added. _Many thanks to [@Aharito](https://github.com/Aharito)._
* \+ `\ddTools::createDocument`, `\ddTools::updateDocument`: TV-dates wich set as unix time will be converted to correct system date format.
* \+ `\ddTools::prepareDocData`: The new method. Prepare document data from single array of fields and TVs: separate them and get TVs additional data if needed.
* \* `\ddTools::explodeFieldsArr` is deprecated, use `\ddTools::prepareDocData` instead (with backward compatibility).


## Version 0.21 (2017-12-09)
* \+ `\ddTools::$tables`: Added all MODX tables except deprecated `keyword_xref`, `site_content_metatags`, `site_keywords` and `site_metatags`.


## Version 0.20 (2017-10-10)
* \+ `\ddTools::getPlaceholdersFromText`: The new method. Finds all placeholders' names and returns them as an array.
* \* `\ddTools::escapeForJS`: Fixed excessive backslach escaping.


## Version 0.19 (2017-10-09)
* \* `\ddTools::sendMail`: Fixed displaying of the file in the mail agent.
* \* `\ddTools::escapeForJS`: Added backslach escaping. _Many thanks to [@Aharito](https://github.com/Aharito)._
* \* The library now works correctly without Composer.


## Version 0.18 (2017-02-10)
* \+ `\ddTools::logEvent`: The new method. Adds an alert message to the MODX event log with additional debug info (backtrace, snippet name, document id, etc).
* \+ `\ddTools::encodedStringToArray`: The new method. Converts encoded strings to arrays. Supported formats: [JSON](https://en.wikipedia.org/wiki/JSON) and [Query string](https://en.wikipedia.org/wiki/Query_string).


## Version 0.17 (2017-01-10)
* \+ `\ddTools::parseText`: Added support of nested arrays in `$params->data`.


## Version 0.16.2 (2016-12-16)
* \* `\ddTools::generateRandomString`: The `$chars` parameter setting was fixed.


## Version 0.16.1 (2016-11-01)
* \* `\ddTools::screening`: Was renamed as `\ddTools::escapeForJS` (with backward compatibility).
* \* `\ddTools::orderedParamsToNamed`: Now is public. But be advised that this is beta-version!


## Version 0.16 (2016-10-29)
* \* Attention! PHP >= 5.4 is required.
* \* `\ddTools::parseText`: Updated to 1.3.1:
	* \* Refactoring, the method now using [named parameters](https://en.wikipedia.org/wiki/Named_parameter) (with backward compatibility).
	* \+ Added an ability to remove empty placeholders (see `$params['removeEmptyPlaceholders']`).
	* \* The `$params['data']` parameter is no longer required.
* \* `\ddTools::sendMail`: Updated to 2.1:
	* \* Refactoring, the method now using [named parameters](https://en.wikipedia.org/wiki/Named_parameter) (with backward compatibility).
	* \* Default value of the `$params['from']` parameter is getting now from `$modx->getConfig ('emailsender')`. _Thank you, [MrSwed](https://github.com/MrSwed)!_.
* \+ `\ddTools::regEmptyClientScript`: Updated to 1.1:
	* \+ Parameters can be passed as stdClass object.
* \* Refactoring: Short array syntax is used because it’s more convenient.


## Version 0.15.4 (2016-06-17)
* \* `\ddTools::verifyRenamedParams`: Updated to 1.1.1:
	* \+ An ability to use multiple old names was added (see the `$compliance` parameter).
	* \* Minor refactoring, code style and description changes.


## Version 0.15.3 (2016-01-12)
* \* `\ddTools::sendMail`: The content and headers of an email are now passed to the `mail` function separately. This fixes empty email contents in some email clients.


## Version 0.15.2 (2016-01-11)
* \* `\ddTools::updateDocument`: The method now uses `mysqli_info` if `$modx->db->conn` is an instance of the `mysqli` class or `mysql_info` otherwise.


## Version 0.15.1 (2015-12-29)
* \* The `$modx->getVersionData` method existence check was moved under the isset $modx condition.
* \* `\ddTools::getTemplateVarOutput`: The check for existence of `$row['id']` was changed to an isset check.


## Version 0.15 (2015-12-25)
* \+ `\ddTools::copyDir`: The new method. It allows copying a folder with all its contents recursively.
* \* `\ddTools::updateDocument`: The method now uses `mysqli_info` instead of `mysql_info`.
* \* `\ddTools::getDocuments`: user access options are now completely ignored while retrieving. It’s done because the method is supposed to be a low level implementation, so it’s implied that a structure of a higher level will be dealing with user access.
* \* The library now depends on `dd/composer-plugin-modxevo-library-ddtools-installer` v1.0.5
* \+ A new helper class called `\ddTools\Response` was added. It’s recommended to be used as a skeleton for the response to a client request or as the result of a snippet supporting AJAX output.


## Version 0.14.3 (2015-12-13)
* \+ An `isset` check for the global `$modx` variable has been added to prevent an error when calling the `$modx->getFullTableName` method.


## Version 0.14.2 (2015-11-05)
* \+ Added a global statement at the beginning to make sure that `$modx` is available. Without the statement an error occurs while autoloading via Composer.


## Version 0.14.1 (2015-11-03)
* \* The following methods need their `$publication` and `$deleted` parameters to be set as `'all'` to return the required documents regardless of their publication and / or removal status(es). The previous value (`false`) is still supported but causes a warning in the log and will be dropped sometime:
	* \* `\ddTools::getDocuments`.
	* \* `\ddTools::getDocument`.
	* \* `\ddTools::getTemplateVars`.
	* \* `\ddTools::getTemplateVarOutput`.
	* \* `\ddTools::getDocumentChildren`.
	* \* `\ddTools::getDocumentChildrenTVarOutput`.
* \* `\ddTools::getTemplateVars`: Updated to 1.3. The method now returns the template variables of a document whether the document is deleted or not.


## Version 0.14 (2015-10-05)
* \* The structure of the repository has been completely changed to meet the Composer requirements.


## Version 0.13.3 (2015-09-17)
* \* `\ddTools::createDocument`: The `path` of a new document now properly depends on the `alias` / `id` of its parent.


## Version 0.13.2 (2015-09-07)
* \* `\ddTools::createDocument`: The method has been slightly changed. The MODX `documentMap` and `aliasListing` config arrays are now being modified properly while the method is called.


## Version 0.13.1 (2015-08-17)
* \* `\ddTools::sendMail`: The method was slightly changed to eliminate errors in PHP 5.4−5.6 during headers validation:
	* \* All double `\r\n` and singe `\r\n` were replaced with single `PHP_EOL`.
	* \* Leading or trailing `PHP_EOL`'s are now trimmed in email content.


## Version 0.13 (2014-07-13)
* \+ `\ddTools::sendMail`: The new method. It sends emails.


## Version 0.12 (2014-05-23)
* \+ `\ddTools::verifyRenamedParams`: The new method. It checks an array for deprecated parameters and writes warning messages into the MODX event log. It returns an associative array, in which the correct parameter names are the keys and the parameter values are the values. You can use the `exctract` function to turn the array into variables of the current symbol table.


## Version 0.11.1 (2014-04-11)
* \* The following methods have been slightly updated in accordance with MODX 1.0.13:
	* \* `\ddTools::getDocuments`.
	* \* `\ddTools::getTemplateVars`.
	* \* `\ddTools::getTemplateVarOutput`.
	* \* `\ddTools::getDocumentChildren`.
	* \* `\ddTools::getDocumentChildrenTVarOutput`.


## Version 0.11 (2014-02-11)
* \+ `\ddTools::ddTools::sort2dArray`: The new method. It sorts 2-dimensional array by multiple columns (like in SQL) using Hoare’s method, also referred to as quicksort. The sorting is stable.
* \* Small changes for compatibility with old MODX versions.
* \* Bugfix: The method `\ddTools::unfoldArray` didn’t used to be static.


## Version 0.10 (2013-10-17)
* \+ `\ddTools::unfoldArray`: The new method. Converts a multidimensional array into an one-dimensional one joining the keys with `'.'` (see the description & examples).
* \* `\ddTools::$documentFields`: The field `alias_visible` will be added to the array only if the version of MODX is later than 1.0.11 for backward compatibility.
* \* The array `\ddTools::$tables` with its elements is declared directly in the class to make it clear.


## Version 0.9.2 (2013-10-17)
* \* Attention! MODX >= 1.0.12 is required.
* \* `\ddTools::$documentFields`: The field `alias_visible` has been added to the array (MODX 1.0.12).


## Version 0.9.1 (2013-10-10)
* \* `\ddTools::parseFileNameVersion`: Updated to 1.1:
	* \* File extension is currently returned along with file name & version.


## Version 0.9 (2013-09-03)
* \+ `\ddTools::getDocumentIdByUrl`: The new method. It gets ID of a document by its URL.


## Version 0.8.1 (2013-07-11)
* \* `\ddTools::explodeAssoc`: Updated to 1.1.1:
	* \* The processing of an empty string as input argument has been added (the method returns an empty array in such cases).


## Version 0.8 (2013-07-06)
* \+ `\ddTools::parseFileNameVersion`: The new method. It parses a file path and gets its name & version.
* \* `\ddTools::regEmptyClientScript`: Updated to 1.0.1:
	* \* Bugfix: A current version use is checked when an empty value assigns to `$modx->sjscripts` or `$modx->jscripts`.


## Version 0.7 (2013-05-15)
* \+ `\ddTools::getDocumentChildren`: The new method (which is analog of the native one). The method gets fields values of child documents. The values can be got regardless of their documents publication status, that is unavailable in the native method.
* \* `\ddTools::getDocumentChildrenTVarOutput`: Updated to 1.1:
	* \* `published` parameter can be === `false`, then documents publication status does not matter.
* \* Minor code refactoring.


## Version 0.6.1 (2013-04-26)
* \* Bugfix: The following methods were not static:
	* \* `\ddTools::getDocuments`.
	* \* `\ddTools::getDocument`.
	* \* `\ddTools::getTemplateVars`.
	* \* `\ddTools::getTemplateVarOutput`.


## Version 0.6 (2013-03-26)
* \+ A few standard methods to work with documents were added. The methods return results regardless of documents published status:
	* \+ `\ddTools::getDocuments`. It gets required documents (documents fields).
	* \+ `\ddTools::getDocument`. It gets required documents (document field).
	* \+ `\ddTools::getTemplateVars`. It gets the array of template variables and fields of a document.
	* \+ `\ddTools::getTemplateVarOutput`. It gets the associative array of template variables values and fields values of a document.
* \+ `\ddTools::$tables`: `'site_tmplvar_templates'` table was added.


## Version 0.5 (2013-03-12)
* \+ `\ddTools::removeDir`: The new method. It removes a required folder with all contents recursively.
* \+ `\ddTools::regEmptyClientScript`: The new method. It adds a required JS-file into a required MODX inner list according to its version and name and is used to register the scripts, that had already been connected manually.


## Version 0.4.1 (2013-02-28)
* \* `\ddTools::explodeAssoc`: Updated to 1.1:
	* \* The empty value check while key→value splitting has been added (if value is empty then empty string inserts).


## Version 0.4 (2012-10-26)
* \* `\ddTools::updateDocument`: Updated to 1.2:
	* \* The updateDocument name error has been corrected.
	* \* Id parameter takes the value of a positive integer or an array.
	* \* The error that occured when document fields update were not required has been eliminated.
	* \* The simultaneous TV update of a few documents error has been eliminated.
	* \* The method update documents that satisfy `id` criterion and criterions defined in `where` parameter together.


## Version 0.3 (2012-04-11)
* \+ `\ddTools::getDocumentChildrenTVarOutput`: The new method. It gets necessary children of document.


## Version 0.2 (2012-03-21)
* \* Attention! Backward compatibility is broken.
* \+ `\ddTools::$documentFields`: The new field. It contains array of document fields names.
* \+ `\ddTools::$tables`: The new field. It contains full names of some db tables.
* \+ `\ddTools::screening`: The new method. It screening chars into the string.
* \+ `\ddTools::explodeAssoc`: The new method. It splits string into two separators in the associative array.
* \+ `\ddTools::explodeFieldsArr`: The new method. It explodes associative array of fields and TVs into two individual arrays.
* \+ `\ddTools::parseText`: Updated to 1.1:
	* \+ Added possibility to switch off additional parsing of the document fields, settings, chunks (method `mergeAll`).
* \+ `\ddTools::createDocument`: Updated to 1.1:
	* \+ Added possibility to transfer TVs (not only document fields) into the `$fields` param.
* \+ `\ddTools::udateDocument`: Updated to 1.1:
	* \+ Added possibility to transfer TVs (not only document fields) into the `$update` param.
	* \+ Added true verification of changing data. Now method guaranteed returns `true` or `false`.
* \* `\ddTools::parseSourse`: Renamed into `\ddTools::parseSource`.
* \* `\ddTools::generateString`: Renamed into `\ddTools::generateRandomString`.


## Version 0.1 (2012-02-03)
* \+ The first release.


<link rel="stylesheet" type="text/css" href="https://DivanDesign.ru/assets/files/ddMarkdown.css" />
<style>ul{list-style:none;}</style>