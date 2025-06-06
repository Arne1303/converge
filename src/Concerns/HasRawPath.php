<?php

declare(strict_types=1);

namespace Converge\Concerns;

use Closure;

trait HasRawPath
{
    /**
     * the path for the desired folder
     */
    protected string|Closure|null $path = null;

    public function path(string|Closure|null $path): static
    {
        $this->path = $this->normalizePath($path);

        return $this;
    }

    public function in(string|Closure|null $path): static
    {
        $this->path($path);

        return $this;
    }

    /**
     * cross platform
     *
     * @param  string  $path
     * @return string
     */
    public function normalizePath($path)
    {
        return str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $path);
    }

    /**
     * getter for the path
     *
     * @return string|null
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
