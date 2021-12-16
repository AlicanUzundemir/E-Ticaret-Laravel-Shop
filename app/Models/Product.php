<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];
    /**
     * @return BelongsToMany
     */
/*      public function categories(): BelongsToMany
        {
            return $this->belongsToMany(Category::class,'category_product','category_id','id');
        }*/
    
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    /**
     * @return HasOne
     */
    public function productDetail(): HasOne
    {
        //    return $this->hasOne(ProductDetail::class,'p_id');
        return $this->hasOne(ProductDetail::class);
    }

    


}
