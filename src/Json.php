<?php
namespace JsonObject;


use JsonObject\Contract\JsonContract;

/**
 * Class Json
 * @package JsonObject
 */
class Json implements JsonContract
{

    /**
     * Json constructor.
     */
    public function __construct()
    {
        $fields = array_flip(func_get_args());
        foreach($fields as $key=> $val){
            $this->$key = null;
        }
        return $this;
    }

    /**
     * Create a new Json object empty
     *
     * Eg: create($param1,$param2,$param3)
     *
     * @return $this
     */
    public  function create(){

        $fields = array_flip(func_get_args());
        foreach($fields as $key=> $val){
            $this->$key = null;
        }
        return $this;
    }

    /**
     * Create a Json Object from an array with data
     *
     * @param array $data
     * @return $this
     */
    public function createFromArray(array $data){
        return $this->fillObject($data);
    }

    /**
     * Create a new Json object from an json string
     * $param $json
     * @return $this
     */
    public function createFromJson($json){

        $data = json_decode($json);

        $error = json_last_error_msg();
        if($error === 'No error'){
            return $this->fillObject($data);
        }
        else{
            return $error;
        }

    }

    /**
     * @param $data
     * @return $this
     */
    private function fillObject($data){

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