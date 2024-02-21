<?php

abstract class ParentClass
{
    abstract function getSayHello(string $person): array;
}

interface ParentInterface
{
    public function getSayBye(string $person): int;
}

final class ChildClass extends ParentClass implements ParentInterface
{

    public function getSayHello(string $person): array
    {
        return [
            "saludo" => "Hello world" . $person,
        ];
    }

    public function getSayBye(string $person): int
    {
        return 1 + 1;
    }
}