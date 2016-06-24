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

    /**
     * Create a new Json object empty
     *
     * Eg: create($param1,$param2,$param3)
     *
     * @return $this
     */
    public function create(){

        $fields = array_flip(func_get_args());
        foreach($fields as $key=> $val){
            $this->$key = null;
        }
        return $this;
    }

    /**
     * Create a Json Object from  an array with data
     *
     * @param array $data
     * @return $this
     */
    public function createFromArray(array $data){
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