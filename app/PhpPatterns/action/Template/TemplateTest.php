<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/16
 * Time: 8:57 下午
 */

namespace App\PhpPatterns\action\Template;

use Tests\TestCase;

/**
 * 模板方法模式
 * 父类定义了抽象算法执行的顺序，子类重写算法，典型的控制反转
 *
 * 场景：
 * 用户签订合同完成，需要通知用户，有的喜欢短信，有的喜欢邮件，
 * 我们只需要实现统一的合同通知抽象，具体的通知方式由子类去实现就ok了
 */
class TemplateTest extends TestCase
{
    //测试邮件渠道发送合同通知
    public function testEmailNotice()
    {
        $notice = new EmailNotice();
        $notice->setContent('合同签订成功');
        $notice->setSendTime('2021-03-16');
        $content = $notice->send();
        $this->assertEquals('将通过 邮件 渠道在 2021-03-16 发送通知 合同签订成功', $content);
    }

    //测试短信渠道发送合同通知
    public function testSmsNotice()
    {
        $notice = new SmsNotice();
        $notice->setContent('您的合同签订成功啦');
        $notice->setSendTime('2021-03-17');
        $content = $notice->send();
        $this->assertEquals('将通过 短信 渠道在 2021-03-17 发送通知 您的合同签订成功啦', $content);
    }
}
