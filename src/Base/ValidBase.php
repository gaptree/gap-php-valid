<?php

namespace Gap\Valid\Base;

abstract class ValidBase
{
    abstract public function assert($input, $key = '');

    public function throwException($msg, $key = '')
    {
        if ($key) {
            throw new \Exception("$key: $msg");
        }

        throw new \Exception($msg);
    }

    public function exportException($msg, $key = '')
    {
        if ($key) {
            return new \Exception("$key: $msg");
        }

        return new \Exception($msg);
    }
}
