<?php

namespace Gap\Valid\Base;

abstract class ValidBase
{
    abstract public function assert($input, $key = '');

    public function throwException($msg, $key = '')
    {
        throw new \Exception($msg, $key);
    }

    public function exportException($msg, $key = '')
    {
        return new \Exception($msg, $key);
    }
}
