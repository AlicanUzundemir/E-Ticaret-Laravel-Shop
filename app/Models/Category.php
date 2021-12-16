<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','slug','up_id','is_active'];// eklenebilir alanlar
    protected $guarded = [];// eklenemez ve update edilemez alanlar

    public function subCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'up_id', 'id');
    }
    public function mainCategories(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'up_id')
            ->withDefault(['name'=>'Main Category']);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    
}
