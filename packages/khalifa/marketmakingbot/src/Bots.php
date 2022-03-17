<?php

namespace Khalifa\MarketMakingBot;

class Bots
{
    function random_float ($min,$max) {
        return ($min+lcg_value()*(abs($max-$min)));
    }
}
