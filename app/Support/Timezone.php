<?php

namespace App\Support;

use DateTimeZone;

class Timezone
{
    /**
     * Get timezone identifiers grouped by region.
     */
    public static function groups(): array
    {
        return [
            'Africa' => DateTimeZone::listIdentifiers(DateTimeZone::AFRICA),

            'America' => DateTimeZone::listIdentifiers(DateTimeZone::AMERICA),

            'Antarctica' => DateTimeZone::listIdentifiers(DateTimeZone::ANTARCTICA),

            'Arctic' => DateTimeZone::listIdentifiers(DateTimeZone::ARCTIC),

            'Asia' => DateTimeZone::listIdentifiers(DateTimeZone::ASIA),

            'Atlantic' => DateTimeZone::listIdentifiers(DateTimeZone::ATLANTIC),

            'Australia' => DateTimeZone::listIdentifiers(DateTimeZone::AUSTRALIA),

            'Europe' => DateTimeZone::listIdentifiers(DateTimeZone::EUROPE),

            'Indian' => DateTimeZone::listIdentifiers(DateTimeZone::INDIAN),

            'Pacific' => DateTimeZone::listIdentifiers(DateTimeZone::PACIFIC),
        ];
    }

    /**
     * Get all valid timezone identifiers.
     */
    public static function all(): array
    {
        return DateTimeZone::listIdentifiers();
    }

    /**
     * Check whether a timezone is valid.
     */
    public static function isValid(string $timezone): bool
    {
        return in_array(
            $timezone,
            self::all(),
            true
        );
    }
}
