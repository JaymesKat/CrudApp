<?php
declare(strict_types=1);

namespace CrudApp;

class HelloWorld
{
    public function announce(): void
    {
        echo 'Hello, autoloaded world with dependency injection!';
    }
}
