<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 3:46 下午
 */

namespace App\PhpPatterns\action\Iterator;

/**
 * 合同列表迭代器接口
 */
interface Iterator
{
    //当前节点索引
    public function index();

    //当前节点
    public function current();

    //下个节点
    public function next();

    //是否存在下个节点
    public function hasNext(): bool;
}
