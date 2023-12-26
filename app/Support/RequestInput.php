<?php

declare(strict_types=1);

namespace App\Support;

class RequestInput
{
    protected array $attributes;
    protected array $meta;
    public function __construct($request, $route)
    {
        $this->meta = [
            'name' => $route->getName(),
            'groups' => $route->getGroups(),
            'methods' => $route->getMethods(),
            'arguments' => $route->getArguments(),
            'currentUri' => $request->getUri(),
        ];

        $this->attributes = $request->getParsedBody() ?? [];

    }

    public function all()
    {
        return $this->attributes;
    }

    public function __set(string $name, $value): void
    {
        $this->attributes[$name] = $value;
    }

    public function __get(string $name)
    {
        throw_when(!isset($this->attributes[$name]), "{$name} does not exist on request input");
    }

    public function __invoke(string $name)
    {
        return data_get($this->attributes, $name);
    }

    public function forget(string $name)
    {
        unset($this->attributes[$name]);

        return $this;
    }

    public function merge($array)
    {
        array_walk($array, fn($value, $key) => data_set($this->attributes, $key, $value));

        return $this;
    }

    public function fill($array)
    {
        array_walk($array, fn ($value, $key) => data_fill($this->attributes, $key, $value));

        return $this;
    }

    /**
     * Define Methods To Gather Route Meta Information
     */
    public function getCurrentUri()
    {
        return data_get($this->meta, 'currentUri');
    }

    public function getName()
    {
        return data_get($this->meta, 'name');
    }

    public function getGroups()
    {
        return data_get($this->meta, 'groups');
    }

    public function getMethods()
    {
        return data_get($this->meta, 'methods');
    }

    public function getArguments()
    {
        return data_get($this->meta, 'arguments');
    }
}