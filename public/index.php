<?php
require_once "../bootstrap.php";

$json = new \albov\JsonObject\Json(['id' => 1, 'status' => 'on']);

$json->toJson();
$json->render();