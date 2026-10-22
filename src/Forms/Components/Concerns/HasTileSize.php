<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait HasTileSize
{
    /**
     * @var Closure|int|null
     */
    protected Closure|int|null $tileSize = null;

    /**
     * @param Closure|int|null $tileSize
     * @return $this
     */
    public function tileSize(Closure|int|null $tileSize): static
    {
        $this->tileSize = $tileSize;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTileSize(): ?string
    {
        return $this->evaluate($this->tileSize);
    }
}
