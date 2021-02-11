<?php


namespace patterns\DI;


class Injector
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function resolveDependencies($serviceName)
    {
        $instances = [];
        $dependencies = $this->config[$serviceName];
        foreach ($dependencies as $dependency) {
            $instances[] = $this->resolveDependencies($dependency);
        }
        return new $serviceName(...$instances);
    }
}