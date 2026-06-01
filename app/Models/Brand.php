<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


#[Guarded(['id'])]

class Brand extends Model
{
    use HasSlug;

    protected $casts = [
        'show_on_website' => 'boolean',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected function logo(): Attribute
    {
        return Attribute::make(
            get: fn () => 'https://www.carlogos.org/car-logos/' . $this->slug . '-logo.png',
        );
    }

    public function carModels(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
