# Locate Vendor — directory in Composer

Locate Vendor determines file system location of packages in Composer environment.
 
# Installation

Require in your `composer.json`

```json
{
	"require" : {
		"rarst/locate-vendor" : "~1.0"
	}
}
```

or

```shell
composer require rarst/locate-vendor:~1.0 --update-no-dev
```

# Methods

## `get_vendor_path()`

Example code:

```php
$vendor_path  = \Rarst\Composer\Locate_Vendor::get_vendor_path();
```

## `get_package_path()`

Example code:

```php
$package_path = \Rarst\Composer\Locate_Vendor::get_vendor_path( 'twbs/bootstrap' );
```