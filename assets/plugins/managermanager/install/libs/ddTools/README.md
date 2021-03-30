# (MODX)EvolutionCMS.libraries.ddTools

A library with various tools facilitating your work.


## Requires

* PHP >= 5.6
* [(MODX)EvolutionCMS](https://github.com/evolution-cms/evolution) >= 1.1
* [PHP.libraries.phpThumb](http://phpthumb.sourceforge.net) 1.7.15-202004301145 (included)
* [PHP.libraries.hjson](https://github.com/hjson/hjson-php) 2.1 (included)


## Documentation


### Installation


#### Manual

1. Create a new folder `assets/libs/ddTools/`.
2. Extract the archive to the folder.


#### Using [Composer](https://getcomposer.org/)

Just add `dd/evolutioncms-libraries-ddtools` to your `composer.json`.

_ddTools version must be 0.14 or higher to use this method. If you use it, the compatibility with all your snippets, modules, etc. that use ddTools versions under 0.14 will be maintained._


### Parameters description


#### `\ddTools::verifyRenamedParams($params)`

The method checks an array for deprecated parameters and writes warning messages into the MODX event log.
It returns an associative array, in which the correct parameter names are the keys and the parameter values are the values.
You can use the `exctract` function to turn the array into variables of the current symbol table.

* `$params`
	* Desctription: Parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->params`
	* Desctription: The associative array of the parameters of a snippet, in which the parameter names are the keys and the parameter values are the values.  
		You can directly pass here the `$params` variable if you call the method inside of a snippet.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->compliance`
	* Desctription: An array (or object) of correspondence between new parameter names and old ones, in which the new names are the keys and the old names are the values.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->compliance->{$newName}`
	* Desctription: The old name(s). Use a string for a single name or an array for multiple.
	* Valid values:
		* `string`
		* `array`
	* **Required**
	
* `$params->compliance->{$newName}[i]`
	* Desctription: One of the old names.
	* Valid values: `string`
	* **Required**
	
* `$params->returnCorrectedOnly`
	* Desctription: Need to return only corrected parameters?
	* Valid values: `boolean`
	* Default value: `true`
	
* `$params->writeToLog`
	* Desctription: Write a warning message about deprecated parameters to the CMS event log.
	* Valid values: `boolean`
	* Default value: `true`


##### Returns

* `$result`
	* Desctription: An array or object, in which the correct parameter names are the keys and the parameter values are the values.  
		Can contains all parameters or only corrected (see `$params->returnCorrectedOnly`).
	* Valid values:
		* `arrayAssociative` — if `$params->params` set as an array
		* `stdClass` — if `$params->params` set as an object
	
* `$result[$newName]`
	* Desctription: A parameter value, in which the correct parameter name is the key and the parameter value is the value.
	* Valid values: `mixed`


#### `\DDTools\FilesTools`


##### `\DDTools\FilesTools::modifyImage($params)`

Modify your images: create thumbnails, crop, resize, fill background color or add watermark.

* `$params`
	* Desctription: Parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->sourceFullPathName`
	* Desctription: Full file path of source image.  
		You can pass a relative path too (e. g. `assets/images/some.jpg`), the method will automatically add `base_path` if needed.
	* Valid values: `string`
	* **Required**
	
* `$params->outputFullPathName`
	* Desctription: Full file path of result image.
		* You can pass a relative path too (e. g. `assets/images/some.jpg`), the method will automatically add `base_path` if needed.
		* The original image will be overwritten if this parameter is omitted.
	* Valid values: `string`
	* Default value: == `$params->sourceFullPathName`
	
* `$params->transformMode`
	* Desctription: Transform mode.
	* Valid values:
		* `'resize'` — resize only, the image will be inscribed into the specified sizes with the same proportions
		* `'crop'` — crop only
		* `'resizeAndCrop'` — resize small side then crop big side to the specified value
		* `'resizeAndFill'` — inscribe image into the specified sizes and fill empty space with the specified background (see `$params->backgroundColor`)
	* Default value: `'resize'`
	
* `$params->width`
	* Desctription: Result image width.  
		In pair width / height only one is required, omitted size will be calculated according to the image proportions.
	* Valid values: `integer`
	* **Required**
	
* `$params->height`
	* Desctription: Result image height.  
		In pair width / height only one is required, omitted size will be calculated according to the image proportions.
	* Valid values: `integer`
	* **Required**
	
* `$params->allowEnlargement`
	* Desctription: Allow image enlargement when resizing.
	* Valid values: `boolean`
	* Default value: `false`
	
* `$params->backgroundColor`
	* Desctription: Result image background color in HEX (used only for `$params->transformMode` == `'resizeAndFill'`).
	* Valid values: `string`
	* Default value: `FFFFFF`
	
* `$params->allowEnlargement`
	* Desctription: Allow image enlargement when resizing.
	* Valid values: `boolean`
	* Default value: `false`
	
* `$params->quality`
	* Desctription: JPEG compression level.
	* Valid values: `integer`
	* Default value: `100`
	
* `$params->watermarkImageFullPathName`
	* Desctription: Specify if you want to overlay your image with watermark.  
		You can pass a relative path too (e. g. `assets/images/some.jpg`), the method will automatically add `base_path` if needed.
	* Valid values: `string`
	* Default value: —


#### `\DDTools\ObjectTools`


##### `\DDTools\ObjectTools::isPropExists($params)`

Checks if the object, class or array has a property / element.
This is a “syntactic sugar” for checking an element in one way regardless of the “object” type.

The first reason for creating this method is convenience to not thinking about type of “object” variables.
Second, the different order of parameters in the native PHP functions makes us crazy.

* `$params`
	* Desctription: Parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->object`
	* Desctription: Source object or array.
	* Valid values:
		* `stdClass`
		* `array`
	* **Required**
	
* `$params->propName`
	* Desctription: Object property name or array key.
	* Valid values:
		* `string`
		* `integer`
	* **Required**


##### `\DDTools\ObjectTools::getPropValue($params)`

Get the value of an object property or an array element.
This is a “syntactic sugar” for getting an element in one way regardless of the “object” type.

* `$params`
	* Desctription: Parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->object`
	* Desctription: Source object or array.
	* Valid values:
		* `stdClass`
		* `array`
	* **Required**
	
* `$params->propName`
	* Desctription: Object property name or array key.
	* Valid values:
		* `string`
		* `integer`
	* **Required**


###### Returns

* `$result`
	* Desctription: Value of an object property or an array element.
	* Valid values:
		* `mixed`
		* `NULL` — if property not exists


##### `\DDTools\ObjectTools::convertType($params)`

Converts an object type.
Arrays, [JSON](https://en.wikipedia.org/wiki/JSON) and [Query string](https://en.wikipedia.org/wiki/Query_string) objects are also supported.

* `$params`
	* Desctription: Parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->object`
	* Desctription: Input object | array | encoded string.
	* Valid values:
		* `stdClass`
		* `array`
		* `stringJsonObject` — [JSON](https://en.wikipedia.org/wiki/JSON) object
		* `stringJsonArray` — [JSON](https://en.wikipedia.org/wiki/JSON) array
		* `stringHjsonObject` — [HJSON](https://hjson.github.io/) object
		* `stringHjsonArray` — [HJSON](https://hjson.github.io/) array
		* `stringQueryFormated`
	* **Required**
	
* `$params->type`
	* Desctription: Type of resulting object.  
		Values are case insensitive (the following names are equal: `'stringjsonauto'`, `'stringJsonAuto'`, `'STRINGJSONAUTO'`, etc).
	* Valid values:
		* `'objectAuto'` — `stdClass` or `array` depends on input string
		* `'objectStdClass'`
		* `'objectArray'`
		* `'stringJsonAuto'` — `stringJsonObject` or `stringJsonArray` depends on input object
		* `'stringJsonObject'`
		* `'stringJsonArray'`
	* Default value: `'objectAuto'`


###### Returns

* `$result`
	* Desctription: Result type depends on `$params->type`.
	* Valid values:
		* `stdClass`
		* `array`
		* `stringJsonObject`
		* `stringJsonArray`


##### `\DDTools\ObjectTools::extend($params)`

Merge the contents of two or more objects or arrays together into the first one.

* `$params`
	* Desctription: Parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->objects`
	* Desctription: Objects or arrays to merge. Moreover, objects can extend arrays and vice versa.
	* Valid values: `array`
	* **Required**
	
* `$params->objects[0]`
	* Desctription: The object or array to extend. It will receive the new properties.
	* Valid values:
		* `object`
		* `array`
		* `mixed` — if passed something else, the new `stdClass` object will be created instead
	* **Required**
	
* `$params->objects[i]`
	* Desctription: An object or array containing additional properties to merge in.
	* Valid values:
		* `object`
		* `array`
	* **Required**
	
* `$params->deep`
	* Desctription: If true, the merge becomes recursive (aka. deep copy).
	* Valid values: `boolean`
	* Default value: `true`
	
* `$params->overwriteWithEmpty`
	* Desctription: Overwrite fields with empty values (see examples below).  
		The following values are considered to be empty:
		* `''` — an empty string
		* `[]` — an empty array
		* `(object) []` — an empty object
		* `NULL`
	* Valid values: `boolean`
	* Default value: `true`


#### `\DDTools\BaseClass`

Simple class with some small methods facilitating your work.
It is convenient to inherit your classes from this.

You can see an example of how it works in the [(MODX)EvolutionCMS.snippets.ddGetDocumentField](https://code.divandesign.biz/modx/ddgetdocumentfield) code.


##### `\DDTools\BaseClass::setExistingProps($props)`

Sets existing object properties.

* `$props`
	* Desctription: The object properties.
		* The method sets all existing properties: public, private or protected — it doesn't matter, exactly what you pass will be set.
		* No problem if If some properties are not exist, the method just skip them without errors.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$props->{$propName}`
	* Desctription: Key is the property name, value is the property value.
	* Valid values: `mixed`
	* **Required**


##### `\DDTools\BaseClass::toArray()`

Returns all properties of this object as an associative array independent of their visibility.


###### Returns

* `$result`
	* Desctription: An associative array representation of this object.  
		The method returns all existing properties: public, private and protected.
	* Valid values: `arrayAssociative`
	
* `$result[$propName]`
	* Desctription: The key is the object field name and the value is the object field value.
	* Valid values: `mixed`


##### `\DDTools\BaseClass::toJSON()`

Returns all properties of this object as an JSON string independent of their visibility.


###### Returns

* `$result`
	* Desctription: An JSON string representation of this object.  
		The method returns all existing properties: public, private and protected.
	* Valid values: `stringJsonObject`
	
* `$result->{$propName}`
	* Desctription: The key is the object field name and the value is the object field value.
	* Valid values: `mixed`


##### `\DDTools\BaseClass::__toString()`

The same as `\DDTools\BaseClass::toJSON()`.


##### `\DDTools\BaseClass::createChildInstance($params)`

* `$params`
	* Desctription: Parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* **Required**
	
* `$params->parentDir`
	* Desctription: Directory of the parent file (e. g. `__DIR__`).
	* Valid values: `string`
	* **Required**
	
* `$params->name`
	* Desctription: Class name.
	* Valid values: `string`
	* **Required**
	
* `$params->params`
	* Desctription: Params to be passed to object constructor.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
	* Default value: `[]`
	
* `$params->capitalizeName`
	* Desctription: Need to capitalize child name?
	* Valid values: `boolean`
	* Default value: `true`


###### Returns

* `$result`
	* Desctription: The new object instance.
	* Valid values: `object`


#### `\DDTools\Snippet`

Abstract class for snippets.


##### Properties

* `\DDTools\Snippet::$name`
	* Desctription: Snippet name (e. g. `ddGetDocuments`).  
		Will be set from namespace in `\DDTools\Snippet::__construct($params)`.  
		You can use it inside child classes: `$this->name`.
	* Valid values: `string`
	* Visibility: `protected`
	
* `\DDTools\Snippet::$version`
	* Desctription: Snippet version.  
		You **must** define it in your child class declaration.
	* Valid values: `string`
	* Visibility: `protected`
	
* `\DDTools\Snippet::$paths`
	* Desctription: Snippet paths.  
		Will be set in `\DDTools\Snippet::__construct($params)`.
	* Valid values: `stdClass`
	* Visibility: `protected`
	
* `\DDTools\Snippet::$paths->snippet`
	* Desctription: Full path to the snippet folder.
	* Valid values: `string`
	
* `\DDTools\Snippet::$paths->src`
	* Desctription: Ful path to the `src` folder.
	* Valid values: `string`
	
* `\DDTools\Snippet::$params`
	* Desctription: Snippet params.  
		Will be set in `\DDTools\Snippet::__construct($params)`.  
		You can define default values of parameters as associative array in this field of your child class (e. g. `protected $params = ['someParameter' => 'valueByDefault'];`);.
	* Valid values: `stdClass`
	* Visibility: `protected`
	
* `\DDTools\Snippet::$params->{$paramName}`
	* Desctription: Key is parameter name, value is value.
	* Valid values: `mixed`
	
* `\DDTools\Snippet::$paramsTypes`
	* Desctription: Overwrite in child classes if you want to convert some parameters types.  
		Parameters types will be converted respectively with this field in `\DDTools\Snippet::prepareParams`.
	* Valid values: `arrayAssociative`
	* Visibility: `protected`
	
* `\DDTools\Snippet::$paramsTypes[$paramName]`
	* Desctription: The parameter type.  
		Values are case insensitive (the following names are equal: `'stringjsonauto'`, `'stringJsonAuto'`, `'STRINGJSONAUTO'`, etc).
	* Valid values:
		* `'integer'`
		* `'boolean'`
		* `'objectAuto'`
		* `'objectStdClass'`
		* `'objectArray'`
		* `'stringJsonAuto'`
		* `'stringJsonObject'`
		* `'stringJsonArray'`
	* Visibility: `protected`
	
* `\DDTools\Snippet::$renamedParamsCompliance`
	* Desctription: Overwrite in child classes if you want to rename some parameters with backward compatibility (see `$params->compliance` of `\ddTools::verifyRenamedParams`).
	* Valid values: `arrayAssociative`
	* Visibility: `protected`


##### `\DDTools\Snippet::__construct($params)`

* `$params`
	* Desctription: Snippet parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
		* `stringJsonObject`
		* `stringQueryFormated`
	* Default value: `[]`
	
* `$params->{$paramName}`
	* Desctription: Key is parameter name, value is value.
	* Valid values: `mixed`
	* **Required**


##### `\DDTools\Snippet::run()`

Abstract method for main snippet action.

You **must** define it in your child class declaration.


##### `\DDTools\Snippet::runSnippet($params)`

Static method for easy running needed snippet using only it's name and parameters (if needed).

* `$params`
	* Desctription: Snippet parameters, the pass-by-name style is used.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
		* `stringJsonObject`
		* `stringQueryFormated`
	* **Required**
	
* `$params->name`
	* Desctription: The name of the snippet you want to run (e. g. `ddGetDocuments`).
	* Valid values: `string`
	* **Required**
	
* `$params->params`
	* Desctription: Parameters that will be passed to the snippet constructor.
	* Valid values:
		* `stdClass`
		* `arrayAssociative`
		* `stringJsonObject`
		* `stringQueryFormated`
	* Default value: —
	
* `$params->params->{$paramName}`
	* Desctription: Key is parameter name, value is value.
	* Valid values: `mixed`
	* **Required**


### Examples


#### Verify renamed snippet params (`\ddTools::verifyRenamedParams($params)`)

Suppose we have the snippet `ddSendFeedback` with the `getEmail` and `getId` parameters.
Over time, we decided to rename the parameters as `docField` and `docId` respectively (as it happened in version 1.9).
And we want to save backward compatibility, the snippet must work with the old names and send message to the MODX event log.

```php
//Include (MODX)EvolutionCMS.libraries.ddTools
require_once(
	$modx->getConfig('base_path') .
	'assets/libs/ddTools/modx.ddtools.class.php'
);

//Backward compatibility
extract(\ddTools::verifyRenamedParams([
	//We called the method inside of a snippet, so its parameters are contained in the `$params` variable (MODX feature)
	'params' => $params,
	'compliance' => [
		//The new name => The old name
		'docField' => 'getEmail',
		'docId' => 'getId'
	]
]));
```

Below we can use `$docField` and `$docId` and not to worry. The method will check everything and will send a message to the MODX event log.

After some time we decided to rename the parameters again as `email_docField` и `email_docId`. Nothing wrong, the method can works with multiple old names, just pass an array:

```php
extract(\ddTools::verifyRenamedParams([
	//We called the method inside of a snippet, so its parameters are contained in the `$params` variable (MODX feature)
	'params' => $params,
	'compliance' => [
		//The new name => The old names
		'email_docField' => [
			'docField',
			'getEmail'
		],
		'email_docId' => [
			'docId',
			'getId'
		]
	],
	//Also you can prevent writing to the CMS event log if you want
	'writeToLog' => false
]));
```


#### `\DDTools\ObjectTools::convertType($params)`


##### Convert a JSON or Query encoded string to an array

For example, some snippet supports 2 formats in one of parameters: JSON or Query string.
Users use the format that is convenient to them and we support both.
Just call this method and don't care about it.

```php
//We can pass string in JSON format
\DDTools\ObjectTools::convertType([
	'object' => '{
		"pagetitle": "Test title",
		"published": "0"
	}',
	'type' => 'objectArray'
]);

//Or Query string
\DDTools\ObjectTools::convertType([
	'object' => 'pagetitle=Test title&published=0',
	'type' => 'objectArray'
]);
```

Both calls return:

```php
[
	'pagetitle' => 'Test title',
	'published' => '0'
];
```


##### Convert a Query encoded string to a JSON object string

```php
\DDTools\ObjectTools::convertType([
	'object' => 'firstName=Hans&lastName=Zimmer',
	'type' => 'stringJsonAuto'
]);
```

Returns:

```json
{
	"firstName": "Hans",
	"lastName": "Zimmer"
}
```


##### Convert a JSON object to a JSON array

```php
\DDTools\ObjectTools::convertType([
	'object' => '{
		"firstName": "Ramin",
		"lastName": "Djawadi"
	}',
	'type' => 'stringJsonArray'
]);
```

Returns:

```json
[
	"Ramin",
	"Djawadi"
]
```


##### Convert a HJSON encoded string to an object

```php
\DDTools\ObjectTools::convertType([
	'object' => "{
		//This is HJSON, not JSON, so we can use comments insides
		keys: and values can be specified without quotes,
		multilineValues:
			'''
			Write multiline strings with proper whitespace handling.
			Starts and ends with triple quotes.
			A simple syntax and easy to read.
			'''
	}",
	'type' => 'objectStdClass'
]);
```

Returns:

```php
stdClass::__set_state(array(
   'keys' => 'and values can be specified without quotes,',
   'multilineValues' => 'Write multiline strings with proper whitespace handling.
Starts and ends with triple quotes.
A simple syntax and easy to read.',
))
```


#### `\DDTools\ObjectTools::extend($params)`


##### Merge two objects, modifying the first

```php
var_export(\DDTools\ObjectTools::extend([
	'objects' => [
		(object) [
			'cat' => 'mew',
			'dog' => (object) [
				'name' => 'Floyd',
				'weight' => 6
			],
			'rabbit' => 42
		],
		(object) [
			'dog' => (object) [
				'weight' => 10
			],
			'bird' => 0
		]
	]
]));
```

Returns:

```php
stdClass::__set_state(array(
	'cat' => 'mew',
	'dog' => stdClass::__set_state(array(
		'name' => 'Floyd',
		'weight' => 10,
	)),
	'rabbit' => 42,
	'bird' => 0,
))
```


##### Also you can extend arrays

```php
var_export(\DDTools\ObjectTools::extend([
	'objects' => [
		[
			'cat' => 'mew',
			'dog' => [
				'name' => 'Floyd',
				'weight' => 6
			],
			'rabbit' => 42
		],
		[
			'dog' => (object) [
				'weight' => 10
			],
			'bird' => 0
		]
	]
]));
```

Returns:

```php
array(
	'cat' => 'mew',
	'dog' => array(
		'name' => 'Floyd',
		'weight' => 10,
	),
	'rabbit' => 42,
	'bird' => 0,
)
```


##### Moreover, objects can extend arrays and vice versa

```php
var_export(\DDTools\ObjectTools::extend([
	'objects' => [
		[
			'name' => 'jokes',
			'countries' => (object) [
				'usa' => 'democracy',
				'china' => 'chinese democracy'
			],
		],
		(object) [
			'countries' => [
				'china' => 'democracy too'
			]
		]
	]
]));
```

Returns:

```php
//The object expanded the source array
array(
	name' => 'jokes',
	//The array expanded the source object
	'countries' => stdClass::__set_state(
		'usa' => 'democracy',
		'china' => 'democracy too',
	)),
)
```


##### Don't overwrite fields with empty values (`$params->overwriteWithEmpty` == `false`)

By default, empty field values (e. g. `''`) are treated as other values and will replace non-empty ones.

```php
var_export(\DDTools\ObjectTools::extend([
	'objects' => [
		(object) [
			'firstName' => 'John',
			'lastName' => 'Tesla',
			'discipline' => 'Electrical engineering'
		],
		(object) [
			'firstName' => 'Nikola',
			'lastName' => ''
		]
	]
]));
```

Returns:

```php
stdClass::__set_state(array(
	'firstName' => 'Nikola',
	'lastName' => '',
	'discipline' => 'Electrical engineering'
))
```

Empty `lastName` from the second object replaced non-empty `lastName` from the first.

If you want to ignore empty values, just use `$params->overwriteWithEmpty` == `false`:

```php
var_export(\DDTools\ObjectTools::extend([
	'objects' => [
		(object) [
			'firstName' => 'John',
			'lastName' => 'Tesla',
			'discipline' => 'Electrical engineering'
		],
		(object) [
			'firstName' => 'Nikola',
			'lastName' => ''
		]
	],
	'overwriteWithEmpty' => false
]));
```

Returns:

```php
stdClass::__set_state(array(
	'firstName' => 'Nikola',
	'lastName' => 'Tesla',
	'discipline' => 'Electrical engineering'
))
```


#### `\DDTools\ObjectTools::isPropExists($params)`

Checks if the object, class or array has a property / element using the same syntax.

You can pass an object:

```php
var_export(\DDTools\ObjectTools::isPropExists([
	'object' => (object) [
		'firstName' => 'John',
		'lastName' => 'Lennon'
	],
	'propName' => 'firstName'
]));
```

Or an array:

```php
var_export(\DDTools\ObjectTools::isPropExists([
	'object' => [
		'firstName' => 'Paul',
		'lastName' => 'McCartney'
	],
	'propName' => 'firstName'
]));
```

Both calls return `true`.


#### `\DDTools\ObjectTools::getPropValue($params)`

Get the value of an object property or an array element using the same syntax.

You can pass an object:

```php
var_export(\DDTools\ObjectTools::getPropValue([
	'object' => (object) [
		'name' => 'Floyd',
		'weight' => 7
	],
	'propName' => 'name'
]));
```

Or an array:

```php
var_export(\DDTools\ObjectTools::getPropValue([
	'object' => [
		'name' => 'Floyd',
		'weight' => 7
	],
	'propName' => 'name'
]));
```

Both calls return `'Floyd'`.


## Links

* [Home page](https://code.divandesign.biz/modx/ddtools)
* [Telegram chat](https://t.me/dd_code)
* [Packagist](https://packagist.org/packages/dd/evolutioncms-libraries-ddtools)


<link rel="stylesheet" type="text/css" href="https://DivanDesign.ru/assets/files/ddMarkdown.css" />