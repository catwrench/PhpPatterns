<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 10:09 下午
 */

namespace App\PhpPatterns\action\Memento;

/**
 * 合同草稿
 */
class DraftContract
{
    //草稿备忘录
    private $memento;

    //添加草稿
    public function add(string $content)
    {
        $this->memento[] = $content;
    }

    //撤销草稿
    public function cancel(): string
    {
        if (!empty($this->memento)) {
            return array_pop($this->memento);
        } else {
            return $this->get();
        }
    }

    //获取最新草稿
    public function get(): string
    {
        if (!empty($this->memento)) {
            return end($this->memento);
        } else {
            return '';
        }
    }

    //重置草稿
    public function reset()
    {
        $this->memento = [];
    }
}
