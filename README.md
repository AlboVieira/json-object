# json-object
Json object to work better with json .

### Instalation
```sh
composer require albo-vieira/json-object && install
```

### Usage
```sh
/** Creating a Json Object without data, just keys */
$json = new \albov\JsonObject\Json();
$json->create('id','status','data','message','token');

/** Creating a Json Object with data, keys and values */
$json = new \albov\JsonObject\Json(
    [
        'id' => 1,
        'status' => 'on',
        'data' => ['1'],
        'message' => 'A message',
        'token' => 'Token for validate'
    ]
);

/** The keys of the array became attributes of the object, you can change the values like you want */
$json->status = 'off';
```
