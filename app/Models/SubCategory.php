<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

          /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'category_id',
    ];


    /**
     * Get all of the category for the sub category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function Category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
