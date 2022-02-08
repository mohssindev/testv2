<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public const TABLE = 'products';

    protected $guarded = [];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}

