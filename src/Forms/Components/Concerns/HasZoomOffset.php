<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait HasZoomOffset
{
    /**
     * @var Closure|int|null
     */
    protected Closure|int|null $zoomOffset = null;

    /**
     * @param Closure|int|null $zoomOffset
     * @return $this
     */
    public function zoomOffset(Closure|int|null $zoomOffset): static
    {
        $this->zoomOffset = $zoomOffset;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getZoomOffset(): ?int
    {
        return $this->evaluate($this->zoomOffset);
    }
}
