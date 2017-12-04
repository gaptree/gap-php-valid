<?php

namespace Gap\Valid;

class ValidPassword extends ValidWord
{
    protected $min = 3;
    protected $max = 21;
}
