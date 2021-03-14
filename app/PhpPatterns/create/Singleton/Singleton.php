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
 * 单例模式被公认为是 反面模式，通常使用依赖注入模式，保以证可测试性和可维护性
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
