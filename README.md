Spanish DNI/NIE Validator
=========================
[![Build Status](https://secure.travis-ci.org/keyvanakbary/dni-nie-validator.svg?branch=master)](http://travis-ci.org/keyvanakbary/dni-nie-validator)

Simple [spanish DNI/NIE](http://en.wikipedia.org/wiki/Documento_Nacional_de_Identidad) validator.

Setup and Configuration
-----------------------
Add the following to your `composer.json` file
```json
{
    "require": {
        "keyvanakbary/dni-nie-validator": "~1.0"
    }
}
```

Update the vendor libraries

    curl -s http://getcomposer.org/installer | php
    php composer.phar install

Usage
-----

```php
<?php

require 'vendor/autoload.php';

$validator = new DniNieValidator;

if ($validator->isValid('5180536J')) {
    // valid
} else {
    // not valid
}
```