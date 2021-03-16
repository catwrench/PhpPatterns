<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:08 下午
 */

namespace App\PhpPatterns\create\Singleton;

/**
 * 单例模式
 * 主要是禁止用户通过new,clone,反序列化等方式获取实例，只能通过getInstance固定入口获取
 */
class Singleton
{
    private static $instance;

    //获取实例
    public static function getInstance()
    {
        //第一次获取不存在时进行创建
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    //重新构造函数，禁止new，只能通过 getInstance 方法去获取实例
    private function __construct()
    {
    }

    //禁止克隆
    private function __clone()
    {
    }

    //防止反序列化（避免创建副本）
    private function __wakeup()
    {
    }
}
