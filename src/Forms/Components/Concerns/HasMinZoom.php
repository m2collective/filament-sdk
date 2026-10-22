<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait HasMinZoom
{
    /**
     * @var Closure|int|null
     */
    protected Closure|int|null $minZoom = null;

    /**
     * @param Closure|int|null $minZoom
     * @return $this
     */
    public function minZoom(Closure|int|null $minZoom): static
    {
        $this->minZoom = $minZoom;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinZoom(): int|null
    {
        return $this->evaluate($this->minZoom);
    }
}
