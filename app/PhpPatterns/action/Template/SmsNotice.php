<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 9:33 下午
 */

namespace App\PhpPatterns\action\Template;

/**
 * 邮件通知渠道
 */
class SmsNotice extends ContractNoticeAbstract
{
    function noticeChannel(): string
    {
        return '短信';
    }
}
