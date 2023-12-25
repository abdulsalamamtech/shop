<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'price',
        'tags',
        'quantity',
        'short_description',
        'description',
        'information',
        'product_image',
        'colors',
        'sizes',
        'status',
        'brand_id',
        'sub_category_id',
    ];


    /**
     * Get all of the sub category for the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'sub_category_id', 'id');
    }

    /**
     * Get all of the brand for the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function brands()
    {
        return $this->hasMany(Brand::class, 'brand_id', 'id');
    }

}
