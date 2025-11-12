<?php

declare(strict_types=1);

namespace Virementmaitrise\HyvaPayment\Logger;

class Logger extends \Monolog\Logger
{
    public function __construct($name = 'virementmaitrise', array $handlers = [], array $processors = [])
    {
        parent::__construct($name, $handlers, $processors);
    }
}
