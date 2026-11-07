<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Support\Enums\Style;

use Filament\Support\Contracts\HasLabel;

enum Mode: string implements HasLabel
{
    case FILE = 'file';
    case PATH = 'path';
    case TEXT = 'text';

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return match ($this) {
            self::FILE => __('sdk::fields/groups/style/mode.options.file'),
            self::PATH => __('sdk::fields/groups/style/mode.options.path'),
            self::TEXT => __('sdk::fields/groups/style/mode.options.text'),
        };
    }
}
