<?php

namespace yzh52521\Aliyun\Vod;


use yzh52521\Aliyun\command\Publish;

class Service extends \think\Service
{

    public function register()
    {
        // $this->app->bind('AliyunVod', new AliyunVod(config('think-aliyun-vod.aliyunvod.default')));
    }
    public function boot()
    {
        $this->commands(['aliyunvod:publish' => Publish::class]);
    }

}
