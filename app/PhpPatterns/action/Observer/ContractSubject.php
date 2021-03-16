<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/14
 * Time: 3:22 下午
 */

namespace App\PhpPatterns\action\Observer;

use SplObserver;

/**
 * 合同被观察者
 * 实现了SplSubject接口，存储了观察者列表，提供对列表的attach，detach操作
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
