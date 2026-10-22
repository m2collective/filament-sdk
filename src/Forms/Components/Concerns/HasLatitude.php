<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait HasLatitude
{
    /**
     * @var Closure|int|float|null
     */
    protected Closure|int|float|null $latitude = null;

    /**
     * @param Closure|int|float|null $latitude
     * @return $this
     */
    public function latitude(Closure|int|float|null $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return int|float|null
     */
    public function getLatitude(): int|float|null
    {
        return $this->evaluate($this->latitude);
    }
}
