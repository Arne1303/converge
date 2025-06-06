<?php

declare(strict_types=1);

namespace Converge\Concerns;

use Closure;

trait Resolver
{
    public function resolve(mixed $value): mixed
    {
        if ($value instanceof Closure) {
            return $value();
        }

        return $value;
    }
}
