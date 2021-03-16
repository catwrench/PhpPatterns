<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 11:01 下午
 */

namespace App\PhpPatterns\action\Visitor;

/**
 * 线下访问者
 */
class OfflineVisitor implements VisitorInterface
{
    public function getVisitor(): string
    {
        return '线下';
    }
}
