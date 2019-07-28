<?php

namespace App;

class JWT
{
    public $header;
    public $payload;
    public $signature;

    public function __construct($header, $payload, $signature)
    {
        $this->header = $header;
        $this->payload = $payload;
        $this->signature = $signature;
    }
}
