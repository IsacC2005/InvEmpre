<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'sku',
        'description',
        'short_description',
        'unit_of_measuare',
        'is_active',
        'cost_price',
        'sale_price',
        'stock_quantily',
        'min_stock_level',
        'max_stock_level'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
