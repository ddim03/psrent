<?php

namespace App\Casts;

use NumberFormatter;

class MoneyCast
{

    protected string $currency;
    protected string $locale;
    /**
     * Create a new class instance.
     */
    public function __construct(string $currency = 'IDR', string $locale = 'id_ID')
    {
        $this->currency = $currency;
        $this->locale = $locale;
    }

    /**
     * Format the given value as a currency according to the given locale.
     * @return string
     */
    public function get($model, string $key, $value, array $attributes)
    {
        $formatter = new NumberFormatter($this->locale, NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($value, $this->currency);
    }

    /**
     * Parse the given value as a float, removing all non-numeric and non-dot characters.
     * @return float
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return floatval(preg_replace('/[^\d.]/', '', $value));
    }
}
