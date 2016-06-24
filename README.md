# json-object
Json object to work better with json .

### Instalation
```sh
composer require albo-vieira/json-object && install
```

### Usage
```sh
$json = new \albov\JsonObject\Json(
    [
        'id' => 1,
        'status' => 'on',
        'message' => 'A message',
        'token' => 'Token for validate'
    ]
);


print_r($json->toArray());
print_r($json->render());
```
