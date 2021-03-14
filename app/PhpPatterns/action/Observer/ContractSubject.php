<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:22 下午
 */

namespace App\PhpPatterns\action\Observer;

use App\PhpPatterns\ContractInterface;
use SplObserver;

/**
 * 观察者模式
 * 当事件发生时，所以依赖它的对象都会得到通知，减少强依赖的写法，降低代码的耦合
 *
 * PHP定义的用于快速实现观察者模式的几个接口：SplObserver、SplSubject、SplObjectStorage
 * SplObserver主要定义了：attach，detach，notify三个方法
 * SplSubject定义了：update方法
 * SplObjectStorage：定义了用于存储 observer 的容器
 * 不用php官方定义的方法，可以自行去定义类似的接口然后实现
 *
 * 概念
 * 首先要有一个被观察的角色，它是唯一的，但是可以有很多人强势围观，所以Observer会维护一个数组一样的结构，来保存围观它的人
 * 被观察者Subject：主题角色将所有对观察者对象的引用保存在一个集合中，每个主题可以有任意多个观察者。 抽象主题提供了增加（attach）和删除(detach)观察者对象的接口。
 * 观察者Observer:为所有的具体观察者定义一个接口，在观察的主题发生改变时更新自己。
 *
 */
class ContractSubject implements \SplSubject, ContractInterface
{
    //合同编号
    private $sn;
    //SplObjectStorage 存储了观察者列表（用户列表）
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    //添加到观察者列表
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    //移出观察者列表
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    //通知所有的观察者
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    //-----------------

    //创建合同时需要通知用户
    public function create()
    {
        $this->sn = 'HT'.time().random_int(1000, 9999);
        //......

        $this->attach(new UserObserver());
        $this->notify();
        //....
    }

    public function getSn()
    {
        return $this->sn;
    }
}
