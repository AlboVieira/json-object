<?php

namespace JsonObject;


/**
 * Class JsonResult
 * @package JsonObject
 */
class JsonResult extends Json
{

    const STATUS_DEFAULT = '';
    const STATUS_SUCCESS = 'success';
    const STATUS_WARNING = 'warning';
    const STATUS_ERROR = 'error';
    const STATUS_INFO = 'info';


    public function __construct()
    {
        parent::__construct('status', 'message', 'url', 'data', 'error');
    }

}