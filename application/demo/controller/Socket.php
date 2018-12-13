<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\12\11 0011
 * Time: 11:51
 */
namespace app\demo\controller;

use think\worker\Server;

class Socket extends Server
{
    protected $socket = 'websocket://127.0.0.1:2346';

    /**
     * 收到信息
     * @param $connection
     * @param $data
     */
    public function onMessage($connection, $data)
    {
        $connection->send('接受信息成功');
    }

    /**
     * 当连接断开时触发的回调函数
     * @param $connection
     */
    public function onClose($connection)
    {

    }

    /**
     * 当客户端的连接上发生错误事触发
     * @param $connection
     * @param $code
     * @param $msg
     */
    public function onError($connection,$code,$msg)
    {
        echo "error $code $msg\n";
    }

    /**
     * 每个进程启动
     * @param $worker
     */
    public function onWorkerStart($worker)
    {
        //连接成功后的方法
    }
}