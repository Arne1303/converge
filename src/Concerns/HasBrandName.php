<?php

declare(strict_types=1);

namespace Converge\Concerns;

use Closure;
use Illuminate\Contracts\Support\Htmlable;

trait HasBrandName
{
    protected string|Htmlable|Closure|null $brandName = null;

    public function brandName(string|Htmlable|Closure|null $name): static
    {
        $this->brandName = $name;

        return $this;
    }

    public function getBrandName(): string|Htmlable
    {
        return $this->resolve($this->brandName) ?? config('app.name');
    }
}
