<?php
/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 23/06/16
 * Time: 21:59
 */

namespace albov\JsonObject;


use albov\JsonObject\Contract\JsonContract;

class Json implements JsonContract
{

    public function __construct(array $data)
    {
        $this->addFields($data);
    }

    /**
     * @param array $data
     * @return $this
     */
    public function addFields(array $data){
        foreach($data as $key=> $val){
            $this->$key = $val;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function render(){
        return json_encode($this->toArray());
    }

    /**
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }

}