<?php
namespace think\swoole\template;

/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 2018/8/19
 * Time: 下午4:40
 */

abstract class Task
{

    public function __construct(...$args)
    {
        $this->initialize($args);
    }

    abstract protected function initialize($args);

    abstract protected function run($serv, $taskId, $fromWorkerId);

}
