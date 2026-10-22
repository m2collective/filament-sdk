<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait HasTileLayer
{
    /**
     * @var Closure|string|null
     */
    protected Closure|string|null $tileLayer = null;

    /**
     * @param Closure|string|null $tileLayer
     * @return $this
     */
    public function tileLayer(Closure|string|null $tileLayer): static
    {
        $this->tileLayer = $tileLayer;

        return $this;
    }

    /**
     * @return int|float|null
     */
    public function getTileLayer(): int|float|null
    {
        return $this->evaluate($this->tileLayer);
    }
}
