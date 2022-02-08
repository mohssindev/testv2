<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    public const TABLE = 'categories';

    protected $guarded = [];


    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }


}
