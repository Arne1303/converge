<?php

declare(strict_types=1);

namespace Converge\Concerns;

trait HasId
{
    protected ?string $id = null;

    public function id(?string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
}
