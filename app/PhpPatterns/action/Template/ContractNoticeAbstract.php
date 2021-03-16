<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 9:23 下午
 */

namespace App\PhpPatterns\action\Template;

abstract class ContractNoticeAbstract
{
    //通知内容
    private $content;
    //通知时间
    private $sendTime;

    //设置通知内容
    final function setContent(string $content)
    {
        $this->content = $content;
    }

    //设置通知时间
    final function setSendTime(string $sendTime)
    {
        $this->sendTime = $sendTime;
    }

    //通知渠道，之类可以进行重写
    abstract function noticeChannel(): string;

    //发送通知
    final function send(): string
    {
        return '将通过 '.$this->noticeChannel().' 渠道在 '.$this->sendTime.' 发送通知 '.$this->content;
    }
}
