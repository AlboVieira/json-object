<?php
require_once "../bootstrap.php";

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