<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait HasZoom
{
    /**
     * @var Closure|int|null
     */
    protected Closure|int|null $zoom = null;

    /**
     * @param Closure|int|null $zoom
     * @return $this
     */
    public function zoom(Closure|int|null $zoom): static
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getZoom(): ?int
    {
        return $this->evaluate($this->zoom);
    }
}
