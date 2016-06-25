<?php

namespace JsonObject;



class JsonResult extends Json
{

    const STATUS_DEFAULT = '';
    const STATUS_SUCCESS = 'success';
    const STATUS_WARNING = 'warning';
    const STATUS_ERROR = 'error';
    const STATUS_INFO = 'info';

    public function __construct()
    {
        $this->create(
            'status',
            'message',
            'url',
            'data',
            'error'
        );
    }

}