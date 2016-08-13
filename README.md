# MiscTraits
Miscellaneous traits to be used in PHP 

**TimeZoneTrait.php**

 * TimeZoneTrait::getZoneOptionsFull()
  - Get full list of time zones in the format: Country/Region 24:00T (12hT)
 * TimeZoneTrait::getZoneOptions()
  - Get MultiDimensional array of items by continent, or general TZ region (e.g. PACIFIC)
  - Returns in the format: 
```PHP
$timezones = [
  'Africa' => [
		'Africa/Abidjan' => 'Abidjan - 04:42 (4:42 am)',
		'Africa/Accra' => 'Accra - 04:42 (4:42 am)',
		'Africa/Addis_Ababa' => 'Addis_Ababa - 07:42 (7:42 am)',
    ...
    ],
  'America' => [
		'America/Adak' => 'Adak - 19:42 (7:42 pm)',
		'America/Anchorage' => 'Anchorage - 20:42 (8:42 pm)',
		'America/Anguilla' => 'Anguilla - 00:42 (12:42 am)',
		'America/Antigua' => 'Antigua - 00:42 (12:42 am)',
		...
		],
  'Asia' => [
		'Asia/Aden' => 'Aden - 07:42 (7:42 am)',
		'Asia/Almaty' => 'Almaty - 10:42 (10:42 am)',
		'Asia/Amman' => 'Amman - 07:42 (7:42 am)',
		'Asia/Anadyr' => 'Anadyr - 16:42 (4:42 pm)',
		'Asia/Aqtau' => 'Aqtau - 09:42 (9:42 am)',
		...
		],
	...
	];
```
