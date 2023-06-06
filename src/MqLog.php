<?php

namespace Mengqiang\Mquu;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class MqLog
{

    public function getInfo()
    {
        echo "你好啊";
        //记录日志
        $log=new Logger("name");
        $log->pushHandler(new StreamHandler("../mq.log",Logger::WARNING));

        $log->warning("你好啊");
        $log->error("你好");
    }
}