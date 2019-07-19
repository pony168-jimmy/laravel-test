<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;

use Illuminate\Http\Request;

class RedisTestController extends Controller{
    public function test () {
        //连接本地的 Redis 服务
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379);
        echo "Connection to server successfully";
        //存储数据到列表中
        $redis->lpush("tutorial-list", "Redis");
        $redis->lpush("tutorial-list", "Mongodb");
        $redis->lpush("tutorial-list", "Mysql");
        // 获取存储的数据并输出
        $arList = $redis->lrange("tutorial-list", 0 ,5);
        echo "Stored string in redis";
        print_r($arList);  
    }
}
