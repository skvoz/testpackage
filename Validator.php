<?php


namespace myClass;


class Validator
{
    const HELLO_WORLD = 'Hello world';
    /**
     * @param $param
     */
    public function run($param)
    {
        if ($param === self::HELLO_WORLD) {
            echo 'Ok';
        } else {
            echo 'Not Ok';
        }
    }
}