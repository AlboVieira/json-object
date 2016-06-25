<?php
/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 23/06/16
 * Time: 21:59
 */

namespace JsonObject;


use JsonObject\Contract\JsonContract;

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

        return $this->fillObject($data);
    }

    /**
     * Create a new Json object from  an json string
     * $param $json
     * @return $this
     */
    public function createFromJson($json){

        $data = json_decode($json);
        return $this->fillObject($data);
    }

    public function fillObject($data){
        foreach($data as $field => $val){
            $this->$field = $val;
        }
        return $this;
    }

    /** Retrieves a json from object
     *
     * @return string
     */
    public function render(){
        return json_encode($this->toArray());
    }

    /** Retrieves an array from object
     *
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }

}