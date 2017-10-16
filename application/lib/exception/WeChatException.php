<?php
/**
 * Created by PhpStorm.
 * User: LYJ
 * Date: 2017/10/16
 * Time: 19:59
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = '微信接口调用失败';
    public $errorCode = 999;
}