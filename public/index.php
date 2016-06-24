<?php
require_once "../bootstrap.php";


/** Creating a Json Object without data, just keys */
$json = new \JsonObject\Json();
$json->create('id','status','data','message','token');

/** Creating a Json Object with data, keys and values */
$json = new \JsonObject\Json();
$json->createFromArray([
    'id' => 1,
    'status' => 'on',
    'data' => [1,2],
    'message' => 'A message',
    'token' => 'Token for validate'
]);

/** The keys of the array became attributes of the object, you can change the values like you want */
$json->status = 'off';


/** Render Json */
echo '<b>Json Render:</b> '  . $json->render();

echo '<br><br>';

/** Convert obj to array */
echo '<pre>';
print_r($json->toArray());
echo '</pre>';