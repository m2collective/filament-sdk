<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Support\Enums;

use Filament\Support\Contracts\HasLabel;

enum Defer: int implements HasLabel
{
    case FALSE = 0;
    case TRUE = 1;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return match ($this) {
            self::FALSE => __('sdk::fields/defer.options.false'),
            self::TRUE => __('sdk::fields/defer.options.true'),
        };
    }
}
