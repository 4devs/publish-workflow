Publish Workflow Library
========================

[![Build Status](https://travis-ci.org/4devs/publish-workflow.svg?branch=master)](https://travis-ci.org/4devs/publish-workflow)

Documentation
-------------


Installation
------------

Download the library by running the command:

``` bash
$ php composer.phar require fdevs/publish-workflow
```

Composer will install the library to your project's `vendor/fdevs` directory.

Usage
-----

1. Create model
2. Use service

### Create Model

```php
<?php

namespace App\Model;

use FDevs\PublishWorkflow\Model\PublishTrait;
use FDevs\PublishWorkflow\PublishInterface;

class SameDocument implements PublishInterface
{
    use PublishTrait;
}

```

### Use Service

```php
$publishWorkflow = new FDevs\PublishWorkflow\PublishWorkflow();
$model = new App\Model\SameDocument();
$model->setPublishable(true);

echo $publishWorkflow->isPublish($model); //true


//start publishable tomorrow
$model
    ->setPublishable(true)
    ->setPublishStartDate(new \DateTime('tomorrow'))
;

echo $publishWorkflow->isPublish($model); //false

//end publishable tomorrow
$model
    ->setPublishable(true)
    ->setPublishEndDate(new \DateTime('tomorrow'))
;

echo $publishWorkflow->isPublish($model); //true
```

License
-------

This library is under the MIT license. See the complete license in the Library:

    LICENSE

Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/4devs/publish-workflow/issues).
