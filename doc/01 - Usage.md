Using Yampee Annotations
========================

The Yampee Annotations library consists of a main class: the reader.
This class is the entry point to the library.

Registering Annotations
-----------------------

By default, the library is not able to read any annotation. To use it, you need
to register some annotations classes, to define some annotations and their rulings.

For instance, we will create a Route annotation, which will have four attributes :
	- a pattern (a string, required)
	- a name (a string, required)
	- a list of defaults values (an array, not required)

An annotation is defined by a class that extends `Yampee_Annotations_Definition_Abstract`.
For our `Route` annotation, we will get:

``` php
<?php
class RouteAnnotation extends Yampee_Annotations_Definition_Abstract
{
}
```

The `Yampee_Annotations_Definition_Abstract` class set three inherited abstract methods :
	- `getAnnotationName()` return the annotation name (here, `Route`)
	- `getTargets()` return the annotation allowed targets
		(here, we will be able to target only classes and methods)
	- `getAttributesRules()` return definitions for the attributes
		(their types and if they are required or not)

For our annotation, it will looks like that:

``` php
<?php

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class RouteAnnotation extends Yampee_Annotations_Definition_Abstract
{
	protected $pattern;
	protected $name;
	protected $defaults;

	/**
	 * Return the annotation name: here, we will use the annotation as @Route()
	 *
	 * @return string
	 */
	public function getAnnotationName()
	{
		return 'Route';
	}

	/**
	 * Return the list of authorized targets. You can use:
	 *      self::TARGET_CLASS, self::TARGET_PROPERTY,
	 *      self::TARGET_METHOD, self::TARGET_FUNCTION
	 *
	 * An empty array will allow any target.
	 *
	 * @return array
	 */
	public function getTargets()
	{
		return array(self::TARGET_CLASS, self::TARGET_METHOD);
	}

	/**
	 * Return the attributes rules. We will see more details about that in another chapter.
	 *
	 * @return Yampee_Annotations_Definition_Node
	 */
	public function getAttributesRules()
	{
		$rootNode = new Yampee_Annotations_Definition_Node('root');
		$rootNode->catchAll()->end();
		return $rootNode;
	}
}
```

Once created, an annotation must be registered in the reader:

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

Here, `$annotations` contains:

```
array (size=1)
  0 =>
    object(RouteAnnotation)[5]
      protected 'pattern' => string '/{page}' (length=7)
      protected 'name' => string 'homepage' (length=8)
      protected 'defaults' =>
        array (size=0)
          empty
```
