<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Forms\Components\Concerns;

use Closure;

trait CanDetectRetina
{
    /**
     * @var Closure|bool|null
     */
    protected Closure|bool|null $detectRetina = null;

    /**
     * @param Closure|bool|null $detectRetina
     * @return $this
     */
    public function detectRetina(Closure|bool|null $detectRetina): static
    {
        $this->detectRetina = $detectRetina;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDetectRetina(): ?bool
    {
        return $this->evaluate($this->detectRetina);
    }
}
