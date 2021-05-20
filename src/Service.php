<?php

namespace yzh52521\Aliyun\Vod;


use yzh52521\Aliyun\Vod\command\Publish;

class Service extends \think\Service
{


    public function boot()
    {
        $this->commands(['aliyunvod:publish' => Publish::class]);
    }

}
