<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Schemas\Concerns;

use Filament\Schemas\Schema;

trait HasParentRecord
{
    /**
     * @param Schema $schema
     * @return mixed
     */
    protected static function getParentRecord(Schema $schema): mixed
    {
        return $schema->getLivewire()->parentRecord;
    }
}
