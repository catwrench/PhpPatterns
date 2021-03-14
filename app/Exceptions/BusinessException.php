<?php
/**
 * 业务异常
 */

namespace App\Exceptions;

use Exception;

class BusinessException extends Exception
{
    protected $code;
    protected $message;
    protected $detail;

    public function __construct($code, array $params = [], $detail = [])
    {
        // 翻译消息内容
        $message = __('message.error.' . (string)$code, $params);
        if ($message == 'message.error.' . $code) {
            $message = __('message.error.unknown');
        }
        $this->code = $code;
        $this->message = $message;
        $this->detail = $detail;
    }

    public function render()
    {
        return [
            'code'    => $this->code,
            'message' => $this->message,
            'detail'  => $this->detail,
        ];
    }
}
