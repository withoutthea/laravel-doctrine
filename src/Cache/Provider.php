<?php namespace Wota\LaravelDoctrine\Cache;

interface Provider
{
    public function make($config = null);
    public function isAppropriate($provider);
} 
