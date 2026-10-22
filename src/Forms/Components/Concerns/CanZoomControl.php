<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait CanZoomControl
{
    /**
     * @var Closure|bool|null
     */
    protected Closure|bool|null $zoomControl = null;

    /**
     * @param Closure|bool|null $zoomControl
     * @return $this
     */
    public function zoomControl(Closure|bool|null $zoomControl): static
    {
        $this->zoomControl = $zoomControl;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getZoomControl(): ?bool
    {
        return $this->evaluate($this->zoomControl);
    }
}
