<?php
/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 23/06/16
 * Time: 21:59
 */

namespace albov\JsonObject\Contract;


interface JsonContract
{

    /**
     * @param array $data
     * @return mixed
     */
    public function addFields(array $data);

    /**
     * @return mixed
     */
    public function render();

    /**
     * @return mixed
     */
    public function toArray();

}