<?php

namespace SD;

class Hello {

    public function getHello () {
        return $_ENV['MSG'];
    }

}