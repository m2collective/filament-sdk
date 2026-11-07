<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Support\Enums\Script;

use Filament\Support\Contracts\HasLabel;

enum Position: string implements HasLabel
{
    case HEAD = 'head';
    case BODY = 'body';

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return match ($this) {
            self::HEAD => __('sdk::fields/groups/script/position.options.head'),
            self::BODY => __('sdk::fields/groups/script/position.options.body'),
        };
    }
}
