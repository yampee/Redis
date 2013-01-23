Yampee Annotations: a PHP library that understand annotations
=============================================================

What is Yampee Annotations ?
----------------------------

Yampee Annotations is a PHP library that parses annotations in DocBlocks comments and converts them to
PHP objects.

An example ?

``` php
<?php
class TestController
{
	/**
	 * @Route('/{page}', name = 'homepage', defaults = {})
	 */
	public function action()
	{
	}
}

$reader = new Yampee_Annotations_Reader();
$reader->registerAnnotation(new RouteAnnotation());

$annotations = $reader->read(array('TestController', 'action'));
```

But it's much more than this: discover all the possibilities in the documentation !

Documentation
-------------

The documentation is to be found in the `doc/` directory.

About
-------

Yampee Annotations is licensed under the MIT license (see LICENSE file).
The Yampee Annotations library is developed and maintained by the Titouan Galopin.
