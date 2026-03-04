<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Vehicle extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory;
    use \Illuminate\Database\Eloquent\Concerns\HasUuids;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'vin_number',
        'make',
        'model',
        'year_of_reg',
        'mileage',
        'engine_capacity',
        'transmission',
        'fuel_type',
        'auction_grade',
        'cif_price_min',
        'cif_price_max',
        'slug',
        'images',
        'is_available',
    ];

    protected $casts = [
        'images' => 'array',
        'is_available' => 'boolean',
        'year_of_reg' => 'integer',
        'mileage' => 'integer',
        'cif_price_min' => 'decimal:2',
        'cif_price_max' => 'decimal:2',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get the formatted price with currency
     */
    public function getFormattedPriceAttribute(): string
    {
        $minPrice = number_format($this->cif_price_min * 130, 0);
        $maxPrice = number_format($this->cif_price_max * 130, 0);
        return "KES {$minPrice} - {$maxPrice}";
    }

    /**
     * Get the formatted mileage
     */
    public function getFormattedMileageAttribute(): string
    {
        return number_format($this->mileage) . ' km';
    }

    /**
     * Get the full vehicle name
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->year_of_reg} {$this->make} {$this->model}";
    }

    /**
     * Get the primary image or a placeholder
     */
    public function getPrimaryImageAttribute(): string
    {
        $images = $this->images;

        if (is_string($images)) {
            $images = json_decode($images, true) ?: [];
        }

        if (is_array($images) && count($images) > 0 && !empty($images[0])) {
            $image = $images[0];
            // Handle old format (absolute/relative URL) and path-only DB values.
            if (str_starts_with($image, '/') || str_starts_with($image, 'http')) {
                return $image;
            }

            return Storage::url($image);
        }

        return "https://picsum.photos/800/600?random={$this->id}";
    }

    /**
     * Scope a query to only include available vehicles
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    /**
     * Scope a query to filter by year range
     */
    public function scopeYearRange($query, $minYear, $maxYear = null)
    {
        $query->where('year_of_reg', '>=', $minYear);
        if ($maxYear) {
            $query->where('year_of_reg', '<=', $maxYear);
        }
        return $query;
    }

    /**
     * Scope a query to filter by price range
     */
    public function scopePriceRange($query, $minPrice, $maxPrice = null)
    {
        $query->where('cif_price_max', '>=', $minPrice);
        if ($maxPrice) {
            $query->where('cif_price_min', '<=', $maxPrice);
        }
        return $query;
    }
}
