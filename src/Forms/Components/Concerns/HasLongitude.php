<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait HasLongitude
{
    /**
     * @var Closure|int|float|null
     */
    protected Closure|int|float|null $longitude = null;

    /**
     * @param Closure|int|float|null $longitude
     * @return $this
     */
    public function longitude(Closure|int|float|null $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return int|float|null
     */
    public function getLongitude(): int|float|null
    {
        return $this->evaluate($this->longitude);
    }
}
