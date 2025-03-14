<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Unit extends Model
{
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function image(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => asset('storage/' . $attributes['image_path']),
        );
    }
}
