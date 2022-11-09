<?php

    function t(string $key = null, array $replace = [], string $locale = null): string
    {
        if ($key){
            return $key;
        }

        return "hello";
    }