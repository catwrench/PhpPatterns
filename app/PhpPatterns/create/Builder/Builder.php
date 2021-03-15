<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/15
 * Time: 9:15 下午
 */

namespace App\PhpPatterns\create\Builder;

/**
 * 建造者模式
 * 建造者设计模式的目的是消除其他对象的复杂创建过程。使用建造者设计模式不仅是最佳做法，
 * 而且在某个对象的构造和配置方法改变时可以尽可能的较少重复更改代码。
 *
 * 场景：
 * 一份租赁合同通常会有租期条款，优惠条款，租金递增条款（比如每年上浮租金3%），佣金条款等，通过建造者来串起整个计算流程。
 */
interface Builder
{
    public function build();
}
