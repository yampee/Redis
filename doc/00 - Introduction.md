Introduction
============

What is it?
-----------

Yampee Annotations is a PHP library that parses annotations in DocBlocks comments and converts them to
PHP objects.

Annotation are a human-friendly way to configure source code, directly in itself.
An annotation looks like:

``` php
<?php
/**
 * @Route('/{page}', name = 'homepage', defaults = {})
 */
class TestController
{
}
```

Here, the class `TestController` is the target of an annotation, called Route, with three arguments.
Yampee Annotations component let you to use this kind of configuration very easily.

### Easy to use

There is only one archive to download, and you are ready to go. No
configuration, no installation. Drop the files in a directory and start using
it today in your projects.

### Open-Source

Released under the MIT license, you are free to do whatever you want, even in
a commercial environment. You are also encouraged to contribute.

### Documented

Yampee Annotations is fully documented and of course a full API documentation.

### Fast

One of the goal of Yampee Annotations is to find the right balance between speed and
features.

### Real Parser and Lexer

It sports a real parser and is able to parse a large subset annotations types.
It also means that the parser is pretty robust, easy to understand, and simple enough to extend.

### Clear error messages

Whenever you have a syntax problem with your annotations, the library outputs a
helpful message with the annotation name and the attribute where the problem
occurred. It eases the debugging a lot.


Installation
------------

The best way to install Yampee Annotations is to clone this repository:

`git clone git://github.com/yampee/Annotations.git`

The library can be loaded by the built-in autoloader:

``` php
require 'autoloader.php';

$reader = new Yampee_Annotations_Reader();
```

If you have already an autoloader for PEAR-naming convention, you can of course use it.

Support
-------

Support questions and enhancements can be discussed on
[GitHub](https://github.com/yampee/Annotations/issues).

If you find a bug, you can create a ticket in the
[GitHub issues](https://github.com/yampee/Annotations/issues).

License
-------

This component is licensed under the *MIT license*:

>Copyright (c) 2013 Titouan Galopin
>
>Permission is hereby granted, free of charge, to any person obtaining a copy
>of this software and associated documentation files (the "Software"), to deal
>in the Software without restriction, including without limitation the rights
>to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
>copies of the Software, and to permit persons to whom the Software is furnished
>to do so, subject to the following conditions:
>
>The above copyright notice and this permission notice shall be included in all
>copies or substantial portions of the Software.
>
>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
>IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
>FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
>AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
>LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
>OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
>THE SOFTWARE.
