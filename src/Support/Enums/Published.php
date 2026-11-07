<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Support\Enums;

use Filament\Support\Contracts\HasLabel;

enum Published: int implements HasLabel
{
    case INACTIVE = 0;
    case ACTIVE = 1;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return match ($this) {
            self::INACTIVE => __('sdk::fields/published.options.inactive'),
            self::ACTIVE => __('sdk::fields/published.options.active'),
        };
    }
}
