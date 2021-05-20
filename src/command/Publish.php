<?php

namespace yzh52521\Aliyun\Vod\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;

class Publish extends Command
{

    public function configure()
    {
        $this->setName('aliyunvod:publish')
            ->setDescription('Publish auth config to config folder');
    }

    public function execute(Input $input, Output $output)
    {
        if (!file_exists(config_path() . '/think-aliyun-vod.php')) {
            copy(__DIR__ . '/../config.php', config_path() . '/think-aliyun-vod.php');
        }
        $output->writeln('create think-aliyun-vod config ok');
    }

}
