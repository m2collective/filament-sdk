<?php
declare(strict_types=1);

namespace M2Collective\FilamentSDK\Support\Concerns;

trait ConvertToJson
{
    /**
     * @param mixed|null $data
     * @return string
     */
    public function convertToJson(mixed $data = null): string
    {
        return json_encode($data);
    }
}
