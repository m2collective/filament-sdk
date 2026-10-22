<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait HasMaxZoom
{
    /**
     * @var Closure|int|null
     */
    protected Closure|int|null $maxZoom = null;

    /**
     * @param Closure|int|null $maxZoom
     * @return $this
     */
    public function maxZoom(Closure|int|null $maxZoom): static
    {
        $this->maxZoom = $maxZoom;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxZoom(): ?int
    {
        return $this->evaluate($this->maxZoom);
    }
}
