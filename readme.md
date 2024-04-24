# PHP Session

## How to use


```
$data = ["foo" => "bar"];
$session = new Session();
$session->set($data);


var_dump($session->getkey('foo')); // output: string(3) "bar"

var_dump($session->has('foo')); // bool(true)

var_dump($session->remove('foo'));

var_dump($session->getkey('foo')); // output: NULL
```