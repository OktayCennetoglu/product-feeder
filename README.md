
## Product Feeder System

Cimri, Google or Facebook wants products data from e-commerce systems for advertising or listing on their systems. E-commerce systems provide a file or feed through an API with all product data for each system in formats supported by the platforms (JSON, XML etc.).

## How Should I Run It ?
Example:

```php
use Core\Facebook;
use Core\Cimri;
use Core\Google;

$convert = new Facebook();
$convert->outputFile($data);

$convert2 = new Cimri();
$convert2->outputFile($data);

$convert3 = new Google();
$convert3->outputFile($data);
```
