<?php
/**
 * Created by PhpStorm.
 * User: deerajput
 * Date: 8/4/17
 * Time: 16:43
 */

namespace Acme\API\Model;
use Acme\API\Api\PostManagementInterface;

class PostManagement implements PostManagementInterface
{
    /**
     * {@inheritdoc}
     */
    public function getById($param)
    {
        return 'hello api GET return the $param ' . $param;
    }

}