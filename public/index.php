<?php
require_once "../bootstrap.php";

use JsonObject\Json;

/** Creating a Json Object without data, just keys */
$json = Json::create('id','status','data','message','token');

/** Creating a Json Object with data, keys and values from a string json */
$jsonStr= '{
        "registration_ids": ["54654564645"],
        "notification":
        {
            "title":"This is a title. title",
            "text":"here is a message. message"
        }
    }' ;
$json = Json::createFromJson($jsonStr);

/** Creating a Json Object with data, keys and values from an array */
$json = Json::createFromArray([
    'id' => 1,
    'status' => 'on',
    'data' => [1,2],
    'message' => 'A message',
    'token' => 'Token for validate'
]);

/** The keys of the array became attributes , then you can change the values like you want */
$json->status = 'off';
$json->token = 'New Token';

/** Render Json */
$json->render();

/** Convert obj to array */
$json->toArray();

