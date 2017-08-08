<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/4/17
 * Time: 16:45
 */

namespace Acme\API\Api;


interface PostManagementInterface
{

    /**
     * @param int $param
     * @return mixed
     */
    public function getById($param);
}
