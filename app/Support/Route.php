<?php

declare(strict_types=1);

namespace App\Support;


class Route
{
    public static $app;

    public static function setup(&$app)
    {
        self::$app = $app;

        return $app;
    }

    public static function __callStatic(string $name, array $arguments)
    {
        $app = self::$app;

        [$route, $action] = $arguments;

        self::validate($route, $name, $action);

        return is_callable($action)
            ? $app->$name($route, $action)
            : $app->$name($route, self::resolveViaController($action));
    }

    public static function resolveViaController($action)
    {
        $actionExploded = explode('@', $action);
        $class = $actionExploded[0];
        $method = $actionExploded[1];
        $controller = config('routing.controllers.namespace') . $class;
        return [$controller, $method];
    }

    public static function validate($route, $name, $action)
    {
        $exception = "Unresolvable Route Callback/Controller action";
        $context = json_encode(compact('route', 'action', 'name'));
        $fails = !((is_callable($action)) or (is_string($action) and preg_match('/.*@*/', $action)));

        throw_when($fails, $exception . $context);
    }
}
