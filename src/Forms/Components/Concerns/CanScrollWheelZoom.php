<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait CanScrollWheelZoom
{
    /**
     * @var Closure|bool|null
     */
    protected Closure|bool|null $scrollWheelZoom = null;

    /**
     * @param Closure|bool|null $scrollWheelZoom
     * @return $this
     */
    public function scrollWheelZoom(Closure|bool|null $scrollWheelZoom): static
    {
        $this->scrollWheelZoom = $scrollWheelZoom;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getScrollWheelZoom(): ?bool
    {
        return $this->evaluate($this->scrollWheelZoom);
    }
}
