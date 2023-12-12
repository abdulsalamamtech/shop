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

}
