<?php
/**
 * Created by PhpStorm.
 * User: tmtbe
 * Date: 16-7-15
 * Time: 下午3:11
 */

namespace Server\Route;


class NormalRoute implements IRoute
{
    private $client_data;
    /**
     * 设置反序列化后的数据 Object
     * @param $data
     */
    public function handleClientData($data)
    {
        $this->client_data = $data;
        return $this->client_data;
    }

    /**
     * 获取控制器名称
     * @return string
     */
    public function getControllerName()
    {
        return $this->client_data->controller_name;
    }

    /**
     * 获取方法名称
     * @return string
     */
    public function getMethodName()
    {
        return $this->client_data->method_name;
    }
}