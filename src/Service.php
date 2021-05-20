<?php

namespace yzh52521\Aliyun\Vod;


use yzh52521\Aliyun\command\Publish;

class Service extends \think\Service
{

    public function boot()
    {
        $this->commands(['think-aliyun-vod:publish' => Publish::class]);
        $this->app->bind('aliyunvod', new AliyunVod(config('think-aliyun-vod.aliyunvod.default')));
    }

}
