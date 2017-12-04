<?php

namespace Gap\Valid;

class ValidWord extends Base\ValidBase
{
    protected $min = 3;
    protected $max = 15;

    public function assert($password, $key = 'password')
    {
        $notEmpty = new ValidNotEmpty();
        $notEmpty->assert($password, $key);

        $strLength = new ValidStrLength();
        $strLength->setMin($this->min)
            ->setMax($this->max)
            ->assert($password, $key);
    }

    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }
}
